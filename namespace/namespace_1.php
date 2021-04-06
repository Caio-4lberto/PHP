<?php 

    namespace A;

    class Cliente {
        public $nome = 'Jorge';
        public function __get($attr) {
            return $this->$attr;
        }
    }

    namespace B;

    class Cliente {
        public $nome = 'Jamilton';
        public function __get($attr) {
            return $this->attr;
        }
    }


    $x = new \A\Cliente();
    print_r($x);

/*__________________________________________________PROPÓSITO_________________________________________________________

                                    EVITAR ERRO POR DUPLICAÇÃO DE CLASSE
_____________________________________________________________________________________________________________________*/
?>