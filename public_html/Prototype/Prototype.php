<?php

abstract class Paragraph{
    abstract public function format($data);
}

abstract class Header{
    abstract public function header_big($data);
    abstract public function header_small($data);
}

abstract class Lists{
    abstract public function numeric($data);
    abstract public function alpha($data);
}

class PrintedParagraph extends Paragraph{
    public function format($data){
        echo '<br>Содержание для печати ' . $data . '<br>';
    }
}

class PrintedHeader extends Header{
    public function header_big($data){
        echo '<br>Большой заголовок для печати ' . $data . '<br>';
    }
    public function header_small($data){
        echo '<br>Маленький заголовок для печати ' . $data . '<br>';
    }
}

class PrintedLists extends Lists {
    public function numeric($data){
        echo 'Большой список для печати <br>';
        print_r($data) . '<br>';
    }

    public function alpha($data) {
        echo '<br>Маленький список для печати ' . $data . '<br>';
    }
}

class BrowsedParagraph extends Paragraph{
    public function format($data){
        echo '<br>Содержание для браузера ' . $data . '<br>';
    }
}

class BrowsedHeader extends Header{
    public function header_big($data){
        echo '<br>Большой заголовок для браузера ' . $data . '<br>';
    }
    public function header_small($data){
        echo '<br>Маленький заголовок для браузера ' . $data . '<br>';
    }
}

class BrowsedLists extends Lists {
    public function numeric($data){
        echo '<br>Большой список для браузера <br>';
        print_r($data) . '<br>';
    }

    public function alpha($data) {
        echo '<br>Маленький список для браузера ' . $data . '<br>';
    }
}

class DocumentPrototype {
    protected $_paragraph;
    protected $_header;
    protected $_list;

    public function __construct(Paragraph $paragraph, Header $header, Lists $list) {
        $this->_paragraph = $paragraph;
        $this->_header = $header;
        $this->_list = $list;
    }

    public function getParagraph(){
        return clone $this->_paragraph;
    }

    public function getHeader(){
        return clone $this->_header;
    }

    public function getList(){
        return clone $this->_list;
    }
}