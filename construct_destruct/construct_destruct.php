<?php

    class Pessoa {

        public $nome = null;

        function __construct($nome){
            echo 'Objeto iniciado';
            $this->nome = $nome;
        }

        function __destruct() {
            echo 'Objeto removido';
        }

        function __get($atributo) {
            return $this->$atributo;
        }

        function correr() {
            return $this->__get('nome') . ' está correndo';
        }

    }

    /*
    O método construtor de uma classe sempre é executando quando um objeto da classe é instanciado. Normalmente o programador utiliza 
    o método construtor para inicializar os atributos de um objeto, como por exemplo: Estabelecer conexão com um banco de dados, abertura
     de um arquivo que será utilizado para escrita de log, etc.
    */

    $pessoa = new Pessoa('Léticia');
    echo '</br>Nome: '. $pessoa->__get('nome');
    echo '</br>'. $pessoa->correr();

    echo '</br>';

    unset($pessoa);
?>