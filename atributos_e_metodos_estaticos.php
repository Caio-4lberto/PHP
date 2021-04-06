<?php 

    class Exemplo {
        public static $atributo1 = 'Eu sou um atributo estático';   //DECLARAÇÃO DE ATRIBUTOS ESTÁTICOS
        public $atributo2 = 'Eu sou um atributo normal';

        public static function metodo1() {                //DECLARAÇÃO DE MÉTODOS ESTÁTICOS
            $this->atributo2;
            echo 'Eu sou um método estático';

        public function metodo2() {
            echo 'Eu sou um método normal';
        }
    }

    $x = new Exemplo();

    echo Exemplo::$metodo1();

    //echo Exemplo::$atributo1;
    //echo '<br />';
    //Exemplo::metodo1();

}



/*___________________________________RETORNO DE ATRIBUTOS E MÉTODOS ESTÁTICOS____________________________________________

-PEGA O NOME DA CLASSE (Funcionario) E NA INSTANCIA COLOCA (Funcionario::$atributo) OU (Funcionario::$metodo);

OBS: A FORMA ACIMA TEM UM PORÉM QUE É O FATO DELA RETORNAR TAMBÉM MÉTODOS NORMAIS , PORÉM EVITE ISSO.

-O OPERADOR -> NÃO ESTÁ ACESSÍVEL PARA ATRIBUTOS ESTÁTICOS
- MÉTODOS ESTÁTICOS NÃO PODEM UTILIZAR DO $this
________________________________________________________________________________________________________________________*/

?>