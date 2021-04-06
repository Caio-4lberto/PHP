<?php 

    interface EquipamentoEletronicoInterface {
        public function ligar();
        public function desligar();
    }

    class Geladeira implements EquipamentoEletronicoInterface {
        public function abrirPorta() {
            echo 'Abrir a porta';
        }

        public function ligar() {
            echo 'Ligar';
        }

        public function desligar() {
            echo 'Desligar';
        }
    }

    class Tv implements EquipamentoEletronicoInterface {

        public function trocarCanal() {
            echo 'Trocar Canal';
        }

        public function ligar() {
            echo 'Ligar';
        }

        public function desligar() {
            echo 'Desligar';
        }
    

}

$x -> Geladeira();
$y -> Tv();

?>