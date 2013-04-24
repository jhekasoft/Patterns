<?php

require_once 'CompositeUnit.php';

class Army extends Unit{
    
    private $_units = array();
    
    function addUnit( Unit $unit) {
        $this->_units[] = $unit;
    }
    
    function removeUnit( Unit $unit){
        foreach($this->_units as $key=>$value){
            if($value === $unit){
                unset($this->_units[$key]);
                break;
            }
        }
    }
    
    function power(){
        $responce = 0;
        
        foreach($this->_units as $key=>$value){
            $responce += $value->power();
        }
        
        return $responce;
    }
    
}

?>
