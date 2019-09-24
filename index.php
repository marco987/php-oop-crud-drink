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

?>
