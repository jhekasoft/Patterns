<?php

/*
 * SMS Sending API
 */

class SuperSmsPhonebook
{
    private $numbers = array();

    public function addNumber($number) {
        $this->numbers[] = $number;
    }

    public function getNumbers() {
        return $this->numbers;
    }
}

class SuperSmsSender
{
    private $login;
    private $password;
    private $sign;

    public function __construct($login, $password, $sign) {
        $this->login = $login;
        $this->password = $password;
        $this->sign = $sign;

        if('test' != $this->login && '121212' != $this->password) {
            throw new Exception('Wrong login or password');
        }
    }

    public function generateControlSum($secretKey, $login, $sing) {
        return 'ab12';
    }

    public function send(SuperSmsPhonebook $phonebook, $message, $controlSum) {
        if('ab12' != $controlSum) {
            throw new Exception('Wrong secret sum');
        }

        $phones = $phonebook->getNumbers();

        $resultMessage = '';

        if (count($phones) > 0) {
            foreach ($phones as $phone) {
                $resultMessage .= "Mesage &laquo;{$message}&raquo; to {$phone}
                    with sign &laquo;{$this->sign}&raquo; sent.<br />";
            }
        }

        return $resultMessage;
    }
}
