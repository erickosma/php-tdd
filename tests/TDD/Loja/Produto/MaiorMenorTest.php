<?php
namespace TDD\Loja\Produtos;

/**
 *
 * @author erick.giorgio
 *        
 */
require "./vendor/autoload.php";

use TDD\Loja\Carrinho\CarrinhoDeCompras;
use TDD\Loja\Produto\Produto; 
use TDD\Loja\Produto\MaiorMenor;
use PHPUnit_Framework_TestCase as PHPUnit;

class MaiorMenorTest extends PHPUnit
{

    public function testCarrinhoMaiorMenor()
    {
      
        $carrinho = new CarrinhoDecompras();
        
        $carrinho->adiciona(new Produto('Produto de teste', 2500.00));
        $carrinho->adiciona(new Produto('Produto 2', 150.00));
        $carrinho->adiciona(new Produto('Pratos', 50.25));
      
        $maiorMenor = new MaiorMenor();
        $maiorMenor->encontra($carrinho);
        $this->assertEquals("Pratos", $maiorMenor->getMenor()->getNome());
        $this->assertEquals("Produto de teste", $maiorMenor->getMaior()->getNome());
    }
    
    public function testApenasUmProduto(){
        
        $carrinho = new CarrinhoDecompras();
        
        $carrinho->adiciona(new Produto('Produto de teste', 2500.00));
  
        $maiorMenor = new MaiorMenor();
        $maiorMenor->encontra($carrinho);
        $this->assertEquals("Produto de teste", $maiorMenor->getMenor()->getNome());
        $this->assertEquals("Produto de teste", $maiorMenor->getMaior()->getNome());
     
    }
}
