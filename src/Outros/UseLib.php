<?php



namespace Outros;


class UseLib
{
    
    use Lib1;
    use Lib2;

    public function imprime(){
        echo $this->getTeste();
    }

}
?>