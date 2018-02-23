<?php

use PHPUnit\Framework\TestCase;
use Syntaxe\Example\Syntaxe;

final class SyntaxeTest extends TestCase
{
    public function testCanBeStringFormat()
    {
        $syntaxe = new Syntaxe();

        $this->assertInstanceOf(
            Syntaxe::class,
            $syntaxe->makeHello("Sample SAMPLE")
        );
    }
}
