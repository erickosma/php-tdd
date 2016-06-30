<?php
/**
 * Created by PhpStorm.
 * User: zoy
 * Date: 27/06/16
 * Time: 18:50
 */

namespace TDD\Loja\Rh;

use TDD\Loja\Rh\Funcionario;

class CalculadoraDeSalario
{

    public function calculaSalario(Funcionario $funcionario)
    {
        if ($funcionario->getSalario() > 3000) {
            return $funcionario->getSalario() * 0.8;
        }
        return $funcionario->getSalario() * 0.9;
    }
}