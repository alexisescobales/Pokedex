<?php
include ('./php_librarys/library.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<?php

$pokemon1 = createPokemon(001,"Bulbasur","Hoen","Veneno/Planta",70,6.9,"Primera Evolucion","./media/");
$pokemon2 = createPokemon(002,"Ivysaur","Hoen","Veneno/Planta",100,13,"Primera Evolucion","./media/001.png");
showPokemon($pokemon1);
echo "</br>";
showPokemon($pokemon2);

addPokedex($pokemon1);
addPokedex($pokemon2);
?>

</body>
</html>
