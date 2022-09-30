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
    foreach ($pokemon as $item => $pokemons){
        echo $item.": ".$pokemons."</br>";
   }
}

function addPokedex ($pokemon){
    $pokedex = array(
    "Pokemons" => $pokemon);
}



?>


