<?php
namespace TDD\Loja\Produto;

/**
 *
 * @author erick.giorgio
 *
 */

class Produto
{

    private $nome;
    private $valorUnitario;
    private $quantidade;



    public function __construct($nome, $valor,$quantidade= 1)
    {
        $this->nome = $nome;
        $this->valorUnitario = $valor;
        $this->quantidade = $quantidade;
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
        return $this->valorUnitario;
    }

    /**
     * @return mixed
     */
    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    /**
     * @return int
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }


}
