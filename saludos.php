<?php
$vueltas = $_GET['num'];

if($vueltas != 42){
    echo '<h1> Me has pedido que te salude ' .$vueltas .' veces. </h1>';
    for ($i = 0; $i < $vueltas; $i++) {
        echo '<p>' . $i . ' - ¡Hola Mundo!</p>';
    }
}

else{
    echo '<h1> Me has pedido que te salude ' .$vueltas .' veces. </h1>';
    echo '<p> En realidad, esa es la respuesta a la pregunta final sobre la vida, el universo y todo lo demás. </p>';
}

