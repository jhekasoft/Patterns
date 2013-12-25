<?php

    abstract class Director_Abstract
    {
        protected $Builder = null;
        
        public function __construct(Builder_Abstract $Builder)
        {
            $this->Builder = $Builder;
        }
        
        public function create()
        {
            $this->Builder->BuildView();
            $this->Builder->BuildUnits();
        }
    }

?>
