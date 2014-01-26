<?php

    interface Duck {

        public function quack();
        
        public function fly();
        
    }

    class MallardDuck implements Duck {

        public function quack(){
            echo "Quack!<br>";
        }

        public function fly(){
            echo "I'm flying!<br>";
        }
    }

?>

