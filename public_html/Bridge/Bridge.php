<?php

//-----------------Abstact------------------------------------
abstract class Message
{
    public $text;
    protected $impl;

    function __construct($text, Sendler $impl)
    {
        $this->text = $text;
        $this->impl = $impl;
    }
    abstract public function send();
}

class EmailMessage extends Message
{
   public function send() {
    $this->impl->send($this->text);
   }
}

class SmsMessage extends Message
{
   public function send() {
    $this->methodOnlySms();
    $this->impl->send($this->text);
   }

   public function methodOnlySms() {
    print('This method only to SMS <br>');
   }
}


//---------------------Implement------------------------------------
abstract class Sendler
{
   abstract function send($text);
}

class SyncSendler extends Sendler
{
    public function send($text) {
        print('Text: ' . $text . ' send by sync method<br><br>');
    }
}

class ASyncSendler extends Sendler
{
    public function send($text) {
        $this->methodOnlyAsyncSendler();
        print('Text: ' . $text . ' asend by sync method<br><br>');
    }

    protected function methodOnlyAsyncSendler() {
        print('This method only when send by ASync <br>');
    }
}


