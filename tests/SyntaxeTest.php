<?php
/**
 * Created by PhpStorm.
 * User: recep_hidir
 * Date: 23.02.2018
 * Time: 11:34
 */


use Syntaxe\Example\Syntaxe;

class SyntaxeTest extends \PHPUnit_Framework_TestCase
{
    public function testTrueIsTrue()
    {
        $foo = true;
        $this->assertTrue($foo);
    }

    public function testOtherCase()
    {
        $this->assertInstanceOf(
            Syntaxe::class, new Syntaxe()
        );
    }
}

//phpunit --bootstrap ./vendor/autoload.php