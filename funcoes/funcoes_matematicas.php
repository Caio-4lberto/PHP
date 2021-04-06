<?php

//______________________VALOR ABSOLUTO____________________________________

//valor positivo

    echo abs(-5);
    echo "</br></br><hr /></br>";

//__________________________ROUND________________________________________

//arredonda

    echo round(2.8);
    echo round(2.2);
    echo "</br></br><hr /></br>";


//___________________________CEIL________________________________________

//arredonda sempre para cima

    echo ceil(2.1);
    echo "</br></br><hr /></br>";

//__________________________FLOOR________________________________________

//arredonda sempre para baixo

    echo floor(4.9);
    echo "</br></br><hr /></br>";

//__________________________RAND_________________________________________

//Números aleatórios entre 2 estipulados

    echo rand(0, 100);
    echo "</br></br><hr /></br>";

//______________________ARRAY + RAND_____________________________________

//Sorteio

$lista = array("Caio", "Nívea", "Carol", "Pedro");
$x = rand(0, 3);

echo "E o sorteado é: ".$lista[$x];

?>

