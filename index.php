<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>This is a Headin</h1>

<?php

createPokemon(001,"Bulbasur","Kanto","Planta/Veneno",0.7,6.9,"Primera","./media/001.png");
$pokemon = createPokemon(001,"Bulbasur","Kanto","Planta/Veneno",0.7,6.9,"Primera","./media/001.png");

for ($i=0; $i < count($pokemon); $i++) { 
    echo $pokemon[$i];
}
?>

</body>
</html>
