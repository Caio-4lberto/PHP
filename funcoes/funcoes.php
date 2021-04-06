<?php

function somarNumero($num1, $num2) {
        $conta = $num1 + $num2;                       //OU return $num1 + $num2;
        return $conta;                                                      
}

$resultado = somarNumero(10, 20);

echo "Resultado: ".$resultado;

//echo $conta       DARÁ ERRO PELA VARIÁVEL ESTAR NO ESCOPO DA FUNÇÃO


?>