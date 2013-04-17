<?php

class Singleton {
    private static $instance;
    private $properties;

    private function __construct() { }

    public function getInstance() {
        if ( empty( self::$instance ) ) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function setProperty( $key, $val ) {
        $this->properties[$key] = $val;
    }

    public function getProperty( $key ) {
        return $this->properties[$key];
    }
}
