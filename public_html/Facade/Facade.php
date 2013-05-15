<?php

require_once 'SuperSms.php';

class SmsService
{
    private $sender;
    private $login = 'test';
    private $password = '121212';
    private $sign = 'test';

    public function __construct() {
        $this->sender = new SuperSmsSender($this->login, $this->password, $this->sign);
    }

    public function send($numbers, $message) {
        $controlSum = $this->sender->generateControlSum('2323', $this->login, $this->sign);

        $phonebook = new SuperSmsPhonebook();

        if (count($numbers) > 0) {
            foreach ($numbers as $number) {
                $phonebook->addNumber($number);
            }
        }

        return $this->sender->send($phonebook, $message, $controlSum);
    }
}
