<?php 

    namespace A;

    class Cliente implements CadastroInterface {
        public $nome = 'Jorge';
        public function __get($attr) {
            return $this->$attr;
        }

        public function salvar() {
            echo 'Salvar';
        }
        
    }

    interface CadastroInterface {
        public function salvar();
    }

    namespace B;

    class Cliente implements CadastroInterface {
        public $nome = 'Jamilton';
        public function __get($attr) {
            return $this->attr;
        }

        public function salvar() {
            echo 'Salvar';
        }
    }

    interface CadastroInterface {
        public function salvar();
    }

    $x = new \A\Cliente();
    print_r($x);     //11;15


?>