<?php
include ('./php_librarys/library.php'); ?>
<?php include './style/css_index.css'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Pokedex</title>
<link rel="stylesheet" href="./bootstrap-5.2.2-dist/css/bootstrap.min.css">
<script src="./bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
</head>
<body>

<?php
$pokedex = array();

//----------------------------------------CREACION DE POKEMONS------------------------------------------//
$pokemon1 = createPokemon('001',"Bulbasur","Hoen","Veneno/Planta",'70','6.9',"Sin Evolucion","./media/001.png");
$pokemon2 = createPokemon('002',"Ivysaur","Hoen","Veneno/Planta",'100','13',"Primera Evolucion","./media/002.png");
$pokemon3 = createPokemon('004',"Charmander","Jotho","Fuego",'60','8.5',"Sin Evolucion","./media/003.png");
//----------------------------------------CREACION DE POKEMONS------------------------------------------//

//----------------------------------------AÑADIR POKEMON A POKEDEX------------------------------------------//
$pokedex = addPokedex($pokedex,$pokemon1);
$pokedex = addPokedex($pokedex,$pokemon2);
$pokedex = addPokedex($pokedex,$pokemon3);
//----------------------------------------AÑADIR POKEMON A POKEDEX------------------------------------------//

//----------------------------------------AÑADIR POKEMON A POKEDEX------------------------------------------//
showPokedex($pokedex);
//----------------------------------------AÑADIR POKEMON A POKEDEX------------------------------------------//

//----------------------------------------ELIMINAR POKEMON DE POKEDEX------------------------------------------//

//----------------------------------------ELIMINAR POKEMON DE POKEDEX------------------------------------------//

//----------------------------------------AÑADIR POKEMON A POKEDEX------------------------------------------//

//----------------------------------------AÑADIR POKEMON A POKEDEX------------------------------------------//



//----------------------------------------MOSTRAR POKEMONS------------------------------------------//
showPokemon($pokemon1);
echo "</br>";
showPokemon($pokemon2);
echo "</br>";
showPokemon($pokemon3);
//----------------------------------------MOSTRAR POKEMONS------------------------------------------//

?>

</body>
</html>
