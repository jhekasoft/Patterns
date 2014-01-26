<?php
    
    /**
     * Необходимо новое поведение: паттерн "Декоратор".
     * Необходимо предоставить единый упрощенный интерфейс: паттерн "Фасад".
     * Необходимо изменить интерфейс, пожалуйста: паттерн "Адаптер".
     */

    include 'AdapterTarget.php';
    include 'AdapterAdaptee.php';
    include 'AdapterAdapter.php';

    // target
    $turkey = new WildTurkey();
    
    // adaptee
    $duck = new MallardDuck();

    // adapter
    $turkeyAdapter = new TurkeyAdapter($turkey);

    // test 
    $turkey->gobble();
    $duck->quack();
    
    // now turkey can quack
    $turkeyAdapter->quack();

?>

