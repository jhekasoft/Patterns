<?php

// http://omurashov.ru/uml-and-desing-patterns/pattern-observer/

    interface Observable
    {
        public function attach(Observer $instance);

        public function detach(Observer $instance);

        public function notify();
    }
    
    
    interface Observer
    {
        public function update(Observable $instance);
    }
    
    
    class Comment implements Observable
    {
        private $status = 0;

        const SAVED_SUCCESS = 1;

        private $observers = array();

        public function getStatus() {
            return $this->status;
        }

        public function attach(Observer $instance) {
            foreach ($this->observers as $observer) {
                if ($instance === $observer) {
                    return false;
                }
            }

            $this->observers[] = $instance;
        }

        public function detach(Observer $instance) {
            foreach ($this->observers as $key => $observer) {
                if ($instance === $observer) {
                    unset($this->observers[$key]);
                }
            }
        }

        public function notify()  {
            foreach ($this->observers as $observer) {
                $observer->update($this);
            }
        }

        public function save() {
            if (1) {
                $this->status = self::SAVED_SUCCESS;
            }

            $this->notify();
        }
    }
    
    class Logger implements Observer
    {
        private function log($message) {
            echo __CLASS__ . ' : ' . $message;
        }

        public function update(Observable $subject) {
            if ($subject->getStatus() == Comment::SAVED_SUCCESS) {
                $this->log("Comment saved successfully <br>", Comment::SAVED_SUCCESS);
            }
        }
    }

    class Mailer implements Observer
    {
        private function send($message) {
            echo __CLASS__ . ' : ' . $message;
        }

        public function update(Observable $subject) {
            if ($subject->getStatus() == Comment::SAVED_SUCCESS) {
                $this->send("Comment saved successfully <br>", Comment::SAVED_SUCCESS);
            }
        }
    }