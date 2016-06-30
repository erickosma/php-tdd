<?php
/**
 * Created by PhpStorm.
 * User: zoy
 * Date: 29/06/16
 * Time: 18:29
 */

namespace TDD\Loja\Carrinho;

use TDD\Loja\Carrinho\CarrinhoDeCompras;

class MaiorPreco
{

    public function encontra(CarrinhoDeCompras $carrinho)
    {
        if (count($carrinho->getProdutos()) === 0) {
            return 0;
        }
        $maiorValor = $carrinho->getProdutos()[0]->getValorUnitario();

        foreach ($carrinho->getProdutos() as $produto) {
            if ($maiorValor < $produto->getValorUnitario()) {
                $maiorValor = $produto->getValorUnitario();
            }
        }
        return $maiorValor;
    }
}