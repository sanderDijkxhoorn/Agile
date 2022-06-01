<?php
require("Models/Mens.php");
class Werknemer extends Mens {
    private $salaris;
    private $functie;

    public function __construct($naam, $leeftijd, $geslacht, $salaris, $functie) {
        parent::__construct($naam, $leeftijd, $geslacht);
        $this->salaris = $salaris;
        $this->functie = $functie;
    }

    public function getSalaris() {
        return $this->salaris;
    }

    public function getFunctie() {
        return $this->functie;
    }

    public function getNaam() {
        return parent::getNaam();
    }

    public function getLeeftijd() {
        return parent::getLeeftijd();
    }

    public function getGeslacht() {
        return parent::getGeslacht();
    }
}
?>