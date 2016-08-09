<?php
/**
 * Created by PhpStorm.
 * User: zoy
 * Date: 27/06/16
 * Time: 17:59
 */

namespace Outros;


trait Lib2
{
    protected $tabela ="teste 2";

 
    public function getTeste(){
        return $this->tabela;
    }
}