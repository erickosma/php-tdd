<?php
/**
 * Created by PhpStorm.
 * User: zoy
 * Date: 27/06/16
 * Time: 17:55
 */

namespace TDD\Exemplos;
require "./vendor/autoload.php";
use  TDD\Exemplos\ConversorDeNumeroRomano;
use  PHPUnit_Framework_TestCase as PHPUnit;

class ConversorDeNumeroRomanoTest extends PHPUnit
{
    public function testDeveEntenderOSimboloI()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("I");
        $this->assertEquals(1, $numero);
    }

    public function testeDeveEntenderOSimboloV()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("V");
        $this->assertEquals(5, $numero);
    }

    public function testeDeveEntenderOSimboloII()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("II");
        $this->assertEquals(2, $numero);
    }

    public function testeDeveEntenderOSimboloXXII()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("XXII");
        $this->assertEquals(22, $numero);
    }

    public function testDeveEntenderOSimboloIX()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("IX");
        $this->assertEquals(9, $numero);
    }

    public function testDeveEntenderOSimboloXX()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("XX");
        $this->assertEquals(9, $numero);
    }

    public function testDeveEntenderOSimboloXXIV()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("XXIV");
        $this->assertEquals(24, $numero);
    }
}