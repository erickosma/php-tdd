<?php
/**
 * Created by PhpStorm.
 * User: zoy
 * Date: 30/06/16
 * Time: 14:19
 */

namespace TDD\Loja\Carrinho;

use TDD\Loja\Test\TestCase,
    TDD\Loja\Carrinho\CarrinhoDeCompras,
    TDD\Loja\Produto\Produto;

class CarrinhoDeComprasTest
{

    public function testDeveRetornarZeroSeCarrinhoVazio()
    {
        $carrinho = new            CarrinhoDeCompras();
        $valor = $carrinho->maiorValor();
        $this->assertEquals(0, $valor, null, 0.0001);
    }

    public function testDeveRetornarValorDoItemSeCarrinhoCom1Elemento()
    {
        $carrinho = new CarrinhoDeCompras();
        $carrinho->adiciona(new Produto("Geladeira", 1, 900.00));
        $algoritmo = new MaiorPreco();
        $valor = $algoritmo->encontra($carrinho);
        $this->assertEquals(900.00, $valor, null, 0.0001);
    }
    public function testDeveRetornarMaiorValorSeCarrinhoComMuitosElementos()
    {
        $carrinho = new            CarrinhoDeCompras();
        $carrinho->adiciona(new            Produto("Geladeira", 900.00, 1));
        $carrinho->adiciona(new            Produto("Fogão", 1500.00, 1));
        $carrinho->adiciona(new            Produto("Máquina            de            lavar", 750.00, 1));
        $valor = $carrinho->maiorValor();
        $this->assertEquals(1500.00, $valor, null, 0.0001);
    }
}
