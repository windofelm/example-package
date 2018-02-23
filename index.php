<?php

require_once "vendor/autoload.php";

use Syntaxe\Example\Syntaxe as Syntaxe;

$syntaxe = new Syntaxe();

echo $syntaxe->makeHello("John DOE");