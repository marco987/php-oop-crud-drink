<?php

  class Bevanda {

    private $id;
    private $nome;
    private $marca;
    private $prezzo;
    private $scadenza;

    public function __construct($row) {

      $this -> setId($row["id"]);
      $this -> setNome($row["nome"]);
      $this -> setMarca($row["marca"]);
      $this -> setPrezzo($row["prezzo"]);
      $this -> setScadenza($row["scadenza"]);
    }

    public function getId() {
      return $this -> id;
    }
    public function setId($id) {
      $this -> id = $id;
    }
    public function getNome() {
      return $this -> nome;
    }
    public function setNome($nome) {
      $this -> nome = $nome;
    }
    public function getMarca() {
      return $this -> marca;
    }
    public function setMarca($marca) {
      $this -> marca = $marca;
    }
    public function getPrezzo() {
      return $this -> prezzo;
    }
    public function setPrezzo($prezzo) {
      $this -> prezzo = $prezzo;
    }
    public function getScadenza() {
      return $this -> scadenza;
    }
    public function setScadenza($scadenza) {
      $this -> scadenza = $scadenza;
    }

    public function __toString() {
      return $this -> getId() . " " . $this -> getNome() . " " . $this -> getMarca() . " " . $this -> getPrezzo() . " " . $this -> getScadenza();
    }
  }

?>
