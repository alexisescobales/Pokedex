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

function addPokedex ($pokedex,$pokemon){
    array_push($pokedex, $pokemon);
    return $pokedex;
}


function deletePokemon ($num,$pokedex){
    $key = array_search($num,$pokedex);    
    return array_splice($pokedex,$key,4);
}

?>


