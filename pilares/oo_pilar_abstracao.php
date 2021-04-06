<?php
//MODELO

//ENTIDADE OU OBJETO
class Funcionario {

     //VARIÁVEIS, AÇÃO ou ATRIBUTOS

     public $nome = 'Pedro';
     public $telefone = '81 95555-8888';
     public $numFilhos = 2;
    
     //FUNÇÕES, CARACTERÍSTICAS ou MÉTODOS

     function resumirCadFunc() {
           return $this->nome . ' possui ' . $this->numFilhos . ' filho(s)';
    }
    
    function modificarNumFilhos($numFilhos) {
         //AFETAR UM ATRIBUTO DO OBJETO
         $this->numFilhos = $numFilhos;
    }
   
}

//IDENTIDADE ou INSTÂNCIA

$y = new Funcionario();
echo $y->resumirCadFunc();
echo '<br />';
$y->modificarNumFilhos(3);
echo $y->resumirCadFunc();
echo '<hr />';

//IDENTIDADE ou INSTÂNCIA 2

$x = new Funcionario();
echo $x->resumirCadFunc();
echo '<br />';
$x->modificarNumFilhos(5);
echo $x->resumirCadFunc();

?>