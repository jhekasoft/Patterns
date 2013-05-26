<?php

    // http://phpshnik.ru/design-patterns/behavioral/command

interface Comand {
     
    /**
    * @name execute
    * @todo Выполнить команду
    */
    public function execute();
     
    /**
    * @name undo
    * @todo Отменяет команду
    */
    public function undo();
}

class Light {
     
    /**
    * @name on
    * @todo Включить свет
    */
    public function on(){
        echo "Light on.<br>";
    }
     
    /**
    * @name off
    * @todo Выключить свет
    */
    public function off(){
        echo "Light off.<br>";
    }
}
 
class Radio {
     
    /**
    * @name on
    * @todo Включить радио
    */
    public function on(){
        echo "Radio on.<br>";
    }
     
    /**
    * @name off
    * @todo Выключить радио
    */
    public function off(){
        echo "Radio off.<br>";
    }
}

class LightOnComand implements Comand{
 
    public $light = null;
 
    public function __construct(Light $light){
 
        $this->light = $light;
    }
 
    /**
    * @name execute
    * @todo Выполнить команду включить свет
    */
    public function execute(){
         
        $this->light->on();
    }
     
    /**
    * @name undo
    * @todo Отменяет команду
    */
    public function undo(){
         
        $this->light->off();
    }
}
 
class LightOffComand implements Comand{
 
    public $light = null;
 
    public function __construct(Light $light){
 
        $this->light = $light;
    }
 
    /**
    * @name execute
    * @todo Выполнить команду выключить свет
    */
    public function execute(){
         
        $this->light->off();
    }
     
    /**
    * @name undo
    * @todo Отменяет команду
    */
    public function undo(){
         
        $this->light->on();
    }
}
 
class RadioOnComand implements Comand{
 
    public $radio = null;
 
    public function __construct(Radio $radio){
 
        $this->radio = $radio;
    }
 
    /**
    * @name execute
    * @todo Выполнить команду включить радио
    */
    public function execute(){
         
        $this->radio->on();
    }
     
    /**
    * @name undo
    * @todo Отменяет команду
    */
    public function undo(){
         
        $this->radio->off();
    }
}
 
class RadioOffComand implements Comand{
 
    public $radio = null;
 
    public function __construct(Radio $radio){
 
        $this->radio = $radio;
    }
 
    /**
    * @name execute
    * @todo Выполнить команду выключить радио
    */
    public function execute(){
         
        $this->radio->off();
    }
     
    /**
    * @name undo
    * @todo Отменяет команду
    */
    public function undo(){
         
        $this->radio->on();
    }
}

class RemoteControl {
 
    /**
    * @var Comand
    */
    public $command = null;
 
    /**
    * @name setComend
    * @todo Устанавливает команду
    */
    public function setComand(Comand $comand){
 
        $this->command = $comand;
    }
 
    /**
    * @name executeComand
    * @todo Выполняет команду
    */
    public function executeComand(){
 
        $this->command->execute();
    }
 
    /**
    * @name undoComand
    * @todo Отменяет команду
    */
    public function undoComand(){
 
        $this->command->undo();
    }
}