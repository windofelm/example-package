<?php

namespace Syntaxe\Example;

class Syntaxe {

    public function __construct()
    {
        //
    }

    public function makeHello($name)
    {
        return "Hello <b>{$name}</b> from new package.";
    }
}