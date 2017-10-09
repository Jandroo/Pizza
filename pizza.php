<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pizzeria</title>
  </head>
  <body>

  <p><h1>Pizzeria de Buitoni</h1></p>

<?php

  $possibles_ingredients = array(
      0 => 'Massa',
      1 => 'Orenga',
      2 => 'Formatge',
      3 => 'Pernil dolç',
      4 => 'Bacon',
      5 => 'Olivas',
      6 => 'Champiñones',
      7 => 'Hamburguesa',
      8 => 'Tomaquet'
      );

  $longitud = sizeof($possibles_ingredients);
  echo "<form>";

  for($i=0;$i<$longitud;$i++){

    echo "<p>".$possibles_ingredients[$i]."<input type='checkbox' name='".$i."'value='".$i."'></p>";
  }

  echo "<button value='submit'>Pedir</button>";

  //Funcions
?>

</body>
</html>