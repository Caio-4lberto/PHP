<?php
//MODELO

//ENTIDADE OU OBJETO
class Funcionario {

     //VARIÁVEIS, AÇÃO ou ATRIBUTOS

     public $nome = null;
     public $telefone = null;
     public $numFilhos = null;
    
     //FUNÇÕES, CARACTERÍSTICAS ou MÉTODOS

     function setNome($nome){
         $this->nome = $nome;
     }

     function setNumFilhos($numFilhos){
        $this->numFilhos = $numFilhos;
    }

    function getNome(){
        return $this->nome;
    }

    function getNumFilhos(){
        return $this->numFilhos;
    }
   
}

//IDENTIDADE ou INSTÂNCIA

$y = new Funcionario();
$y->setNome('José');
$y->setNumFilhos(36);
echo $y->getNome().' possui '.$y->getNumFilhos(). ' filho(s).';

?>