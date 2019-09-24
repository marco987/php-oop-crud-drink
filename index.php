<?php

  include "db-connessione.php";
  include "db-query.php";
  include "db-popo.php";

  $res = $conn -> query($query_getAllDrink);

  $bevande = [];
  if ($res && $res -> num_rows > 0) {

    while ($row = $res -> fetch_assoc()) {

      $bevande[] = new Bevanda($row);
    }
  };

  for ($i=0; $i<sizeof($bevande); $i++) {

    $bevanda = $bevande[$i];

    echo $bevanda . "<br>";
  }

  echo "<br>--------------------------------<br><br>";

  $min = $bevande[0];
  $max = $bevande[0];
  $sum = 0;

  for ($i=0; $i<sizeof($bevande); $i++) {

    $bevanda = $bevande[$i];

    $bevandaPrezzo = $bevanda -> getPrezzo();
    $minPrezzo = $min -> getPrezzo();
    $maxPrezzo = $max -> getPrezzo();

    $sum += $bevanda -> getPrezzo();

    if ($minPrezzo > $bevandaPrezzo) {
      $min = $bevanda;
    }
    if ($maxPrezzo < $bevandaPrezzo) {
      $max = $bevanda;
    }
  }

  echo "Prezzo minore: " . $min . "<br>Prezzo maggiore: " . $max . "<br>Somma prezzi: " . $sum;

?>
