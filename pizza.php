<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pizzeria</title>
  </head>
  <body>

  <p><h1>Pizzeria de Buitoni</h1></p>

  <style>
   
   

  </style>

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

    echo "<p>".$possibles_ingredients[$i]."<input type='checkbox' name='".$i."'value='".$i."'></p>\n";
  }

  echo "<button value='submit'>Pedir</button>";

  //Funcions

  function processar_dades($ingredients){

  global $possibles_ingredients;

  $preu_total = 5.0;

  //Preparo llista amb tot el que conté la pizza
  $ingredients_solicitats = "";
  foreach ($ingredients as $value) {
    $ingredients_solicitats = $ingredients_solicitats.
                              "<li>".
                              $possibles_ingredients[$value].
                              "</li>";
    $preu_total += 0.5;
  }

  //preparo missatge del processament
  $resultat = "<h1>Has demanat una pizza amb els següents ingredients</h1>
            <ul>
               $ingredients_solicitats
            </ul>
            <h3>El preu total de la pizza eś $preu_total</h3>
            ";

  //mostrar resultats
  echo $resultat;
}

  function atencio_usuari(){

  echo "<h4>Una bona pizza ha d'incloure massa i orenga</h4>";

}

?>

</body>
</html>