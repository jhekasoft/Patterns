<?php


    interface Turkey {

        public function gobble();

        public function fly();
    
    }

    class WildTurkey implements Turkey {

        public function gobble() {
            echo "Gobble gobble!<br>";
        }

        public function fly() {
            echo "I'm flying too!<br>";
        }

    }
    
?>


