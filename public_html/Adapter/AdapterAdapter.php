<?php

    class TurkeyAdapter implements Duck {

        public $turkey = null;

        public function __construct(Turkey $turkey) {
            $this->turkey = $turkey;
        }

        public function quack() {
            $this->turkey->gobble();
        }

        public function fly() {
            $this->turkey->fly();
        }

    }

?>