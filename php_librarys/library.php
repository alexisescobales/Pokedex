<?php

function createPokemon ($numero, $nombre, $region, $tipo, $altura, $peso, $evolucion ,$imagen){
    $pokemon = [
        'Numero' => $numero,
        'Nombre' => $nombre,
        'Region' => $region,
        'Tipo' => $tipo,
        'Altura' => $altura,
        'Peso' => $peso,
        'Evolucion' => $evolucion,
        'Imagen' => $imagen
    ];
    return $pokemon;
}  

function showPokemon ($pokemon){
    for ($i=0; $i < count($pokemon); $i++) { 
        echo $pokemon[$i];
    }
} 


/*
--Pimer pokemon informacion--
'Numero' => 001,
'Nombre' => "Bulbasur",
'Region' => "Kanto",
'Tipo' => "Planta/Veneno",
'Altura' => 0.7,
'Peso' => 6.9,
'Evolucion' => "Primera",
'Imagen' => "./users/001.png"
*/
?>


