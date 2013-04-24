<?php

abstract class Unit {
    
    /*
     * добавление объекта - реализация по умолчанию
     */
    function addUnit( Unit $unit) {
        echo 'объекту нельзя добавить unit<br/><br/>';
    }
    
    /*
     * удаление объекта - реализация по умолчанию
     */
    function removeUnit( Unit $unit){
        echo 'у объекта нельзя удалить unit<br/><br/>';
    }
    
    /*
     * рассчет силы объекта
     */
    abstract function power();
    
}

?>
