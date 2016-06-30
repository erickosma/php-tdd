<?php
/**
 * Created by PhpStorm.
 * User: zoy
 * Date: 29/06/16
 * Time: 18:29
 */
namespace TDD\Loja\Carrinho;


use TDD\Loja\Test\TestCase,
    TDD\Loja\Carrinho\CarrinhoDeCompras,
    TDD\Loja\Carrinho\MaiorPreco;
use TDD\Loja\Produto\Produto;


class MaiorPrecoTest extends TestCase
{
    public function testDeveRetornarZeroSeCarrinhoVazio()
    {
        $carrinho = new            CarrinhoDeCompras();
        $algoritmo = new            MaiorPreco();
        $valor = $algoritmo->encontra($carrinho);
        $this->assertEquals(0, $valor, null, 0.0001);
    }



    public function testDeveRetornarMaiorValorSeCarrinhoComMuitosElementos()
    {
        $carrinho = new            CarrinhoDeCompras();
        $carrinho->adiciona(new            Produto("Geladeira", 900.00));
        $carrinho->adiciona(new            Produto("Fogão", 1500.00));
        $carrinho->adiciona(new            Produto("Máquina  de lavar",  750.00));
        $algoritmo = new            MaiorPreco();
        $valor = $algoritmo->encontra($carrinho);
        $this->assertEquals(1500.00, $valor, null, 0.0001);
    }

}