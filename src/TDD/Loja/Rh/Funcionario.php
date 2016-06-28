<?php
/**
 * Created by PhpStorm.
 * User: zoy
 * Date: 27/06/16
 * Time: 18:40
 */

namespace TDD\Loja\Rh;


class Funcionario
{
    protected $nome;
    protected $salario;
    protected $cargo;

    public function __construct($nome, $salario, $cargo)
    {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->cargo = $cargo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function getCargo()
    {
        return $this->cargo;
    }
}