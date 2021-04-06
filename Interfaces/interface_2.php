<?php 

    interface MamiferoInterface {
        public function respirar();
    }

    interface TerrestreInterface {
        public function andar();
    }

    interface AquaticoInterface {
        public function nadar();
    }


    class Humano implements MamiferoInterface, TerrestreInterface {
        public function andar() {
            echo 'Andar';
        }

        public function respirar() {
            echo 'Respirar';
        }

        public function conversar() {
            echo 'Conversar';
        }

    }

    class Baleia implements MamiferoInterface, AquaticoInterface {
        public function respirar() {
            echo 'Respirar';
        }

        public function nadar() {
            echo 'Nadar';
        }

        public function esguichar() {
            echo 'Esguichar';
        }

    }

//____________________________________________________________________________________________________________

interface AnimalInterface {
    public function comer();
}

interface AveInterface extends AnimalInterface {
    public function voar();
}

class Papagaio implements AveInterface {
    public function voar() {
        echo 'Voar';
    }

    public function comer() {
        echo 'Comer';
    }

}


/*____________________________________________________________________________________________________________

                PARA ENTENDIMENTO VISUAL CONSULTE A IMAGEM NA PASTA COM O NOME : interface_2.png      
____________________________________________________________________________________________________________*/

?>