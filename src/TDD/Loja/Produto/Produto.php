<?php
namespace TDD\Loja\Produto;

/**
 *
 * @author erick.giorgio
 *        
 */

class Produto
{

    protected $nome;

    protected $valor;

    public function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    /**
     *
     * @return the $nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     *
     * @return the $valor
     */
    public function getValor()
    {
        return $this->valor;
    }
}
