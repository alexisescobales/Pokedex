<?php
include ('./li/library.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<?php

$pokemon = createPokemon(001,"Bulbasur","Kanto","Veneno/Planta",2,0.72,"Primera","./media/001.png");
echo $pokemon['Numero'];

?>

</body>
</html>
