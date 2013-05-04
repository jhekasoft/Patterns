<?php

abstract class Question
{

    protected $prompt;
    protected $marker;

    function __construct($prompt, Marker $marker)
    {
        $this->marker = $marker;
        $this->prompt = $prompt;
    }

    function mark($response)
    {
        return $this->marker->mark($response);
    }

}

class TextQuestion extends Question
{
    // Выполняются действая, специфичные для текстовых вопросов
}

class AVQuestion extends Question
{
    // Выполняются действия спецефичные для мультимедийных (аудио- видео-) вопросов
}

abstract class Marker
{

    protected $test;

    function __construct($test)
    {
        $this->test = $test;
    }

    abstract function mark($response);
}

class MarkLogicMarker extends Marker
{

    private $engine;

    function __construct($test)
    {
        parent::__construct($test);
    }

    function mark($response)
    {
        // Возвратим фиктивное значение
        return true;
    }

}

class MatchMarker extends Marker
{

    function mark($response)
    {
        return ( $this->test == $response );
    }

}

class RegexpMarker extends Marker
{

    function mark($response)
    {
        return ( preg_match($this->test, $response) );
    }

}
