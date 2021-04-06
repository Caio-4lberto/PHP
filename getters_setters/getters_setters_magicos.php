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
}

$y = new Funcionario();
$y->__set('nome', 'Caio');
$y->__set('cpf', '852.962.754-85');
$y->__set('email', 'Fulano@gmail.com');
$y->__set('cargo', 'Consultor');

echo 'Eu sou '.$y->__get('nome').' meu CPF é: '.$y->__get('cpf').' caso necessite de um treinamento contate-me pelo meu email: '.$y->__get('email').'. Atuo tanto no suporte quanto como '.$y->__get('cargo').'.';


    /*
    1 - CRIAR NOS MÉTODOS O SET E GET(O set será para que na instância seja informado os dados e o get para recuperar ao imprimir);
    2 - NA INSTÂNCIA HAVERÁ O SET ONDE OS DADOS REFERENTE AO ATRIBUTO E VALOR SERÁ COLOCADO COMO PARÂMETROS EM ASPAS SIMPLES;
    3 - EM RELAÇÃO AO GET NA INSTÂNCIA ELE SEGUIRÁ IGUAL AO SET QUE RESPETIA A FORMULA CRIADA NO METODO. DESSA FORMA, DEVE SER 
    COLOCADO NAS ASPAS O ATRIBUTO EM ASPAS SIMPLES COMO PARÂMETRO.
    
    */

?>