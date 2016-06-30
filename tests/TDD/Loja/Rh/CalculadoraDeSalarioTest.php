<?php
/**
 * Created by PhpStorm.
 * User: zoy
 * Date: 27/06/16
 * Time: 18:46
 */

namespace TDD\Loja\Rh;


use TDD\Loja\Test\TestCase;
use TDD\Loja\Rh\CalculadoraDeSalario,
    TDD\Loja\Rh\Funcionario,
    TDD\Loja\Rh\TabelaCargos;

class CalculadoraDeSalarioTest extends TestCase
{

    public function testCalculoSalarioDesenvolvedoresComSalarioAbaixoDoLimite()
    {
        $calculadora = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario("Andre", 1500.0, TabelaCargos::DESENVOLVEDOR);
        $salario = $calculadora->calculaSalario($desenvolvedor);
        $this->assertEquals(1500.0 * 0.9, $salario, null, 0.00001);
    }

    public function testCalculoSalarioDesenvolvedoresComSalarioAcimaDoLimite()
    {
        $calculadora = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario("Andre", 4000.0, TabelaCargos::DESENVOLVEDOR);
        $salario = $calculadora->calculaSalario($desenvolvedor);
        $this->assertEquals(4000.0 * 0.8, $salario, null, 0.00001);
    }

    public function testDeveCalcularSalarioParaDBAsComSalarioAbaixoDoLimite()
    {
        $calculadora = new CalculadoraDeSalario();
        $dba = new Funcionario("Andre", 500.0, TabelaCargos::DBA);
        $salario = $calculadora->calculaSalario($dba);
        $this->assertEquals(500.0 * 0.9, $salario, null, 0.00001);
    }

}