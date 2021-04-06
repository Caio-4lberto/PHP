<?php
 
class Funcionario {
    public $nome = null;
    public $cpf = null;
    public $email = null;
    public $cargo = null;

    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    function __get($atributo){
        return $this->$atributo;
    }

    function resumirCadFunc(){
        return $this->__get('nome').' possui o cpf com valor '.$this->__get('cpf').'.';   //EM VEZ DE IMPRIMIR FORA CHAMANDO A FORMULA, O CALCULO JÁ CONTÉM O QUE SERÁ EXIBIDO 
    }


}

$y = new Funcionario();
$y->__set('nome', 'Caio');
$y->__set('cpf', '852.962.754-85');
$y->__set('email', 'Fulano@gmail.com');
$y->__set('cargo', 'Consultor');

echo $y->resumirCadFunc();

//echo 'Eu sou '.$y->__get('nome').' meu CPF é: '.$y->__get('cpf').' caso necessite de um treinamento contate-me pelo meu email: '.$y->__get('email').'. Atuo tanto no suporte quanto como '.$y->__get('cargo').'.';

?>