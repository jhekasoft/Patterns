<?php

    // http://phpshnik.ru/design-patterns/behavioral/visitor

class Item{
     
    public $name;
     
    protected $price;
     
    public function __construct($name, $price){
         
        $this->name = $name;
        $this->price = (double)$price;
    }
     
    public function getInfo(){
        return $this->name.' - '.$this->price.'грн.';
    }
}

class Shop{
     
    public $items = array();
     
    /**
     * @name addItem
     * @toda Добавление товара
     * @param Item $item Единица товара
     */
    public function addItem(Item $item){
 
        $this->items[] = $item;
    }
     
    /**
     * @name getItems
     * @toda Возвращает коллекцию товаров
     * @return array
     */
    public function getItems(){
 
        return $this->items;
    }
}

class Visiter{
  
    /**
     * @name getInfo
     * @todo Запрашивает информацию у объекта Item
     * @param Item $item Товар
     */
    public function getInfo(Item $item){
         
        return $item->getInfo();
    }
}

class Traverser{
     
    /**
     * Посетитель
     * @var Visiter
     */
    public $visiter = null;
     
    /**
     * Магазин
     * @var Shop
     */
    public $shop = null;
     
    public function __construct(Shop $shop){
         
        $this->visiter = new Visiter();
         
        $this->shop = $shop;
    }
 
    /**
     * @name displayStat
     * @todo Вывод статистики
     */
    public function displayStat(){
         
        foreach($this->shop->getItems() as $i => $item){
            echo ++$i.'). '.$this->visiter->getInfo($item).'<br>';
        }
    }
}