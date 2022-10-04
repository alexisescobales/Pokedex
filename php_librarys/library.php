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


function searchPokemon ($number,$pokedex){
    $found = false;
    $i = 0;
    $index = -1;
    $numPokemons = count($pokedex);

    while ($i < $numPokemons && !$found) {
        if($pokedex[$i]['Numero'] == $number){
            $index = $i;
            $found = true;
        }else{
            $i++;
        }
    }
    return $index;
}

function deletePokemon ($number,$pokedex){
    $index = searchPokemon($number,$pokedex);
    array_splice($pokedex,$index,1);
    return $pokedex;
}

?>


