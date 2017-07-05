<?php


namespace Talkabot\languages;


abstract class Response
{
    /**
     * @var array
     * @see \Talkabot\languages\ResponseOption
     */
    protected $responses = [];

    protected abstract function setUpLanguage();


}