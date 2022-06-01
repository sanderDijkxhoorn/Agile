<?php
class Mens {
    private $naam;
    private $leeftijd;
    private $geslacht;

    public function __construct($naam, $leeftijd, $geslacht) {
        $this->naam = $naam;
        $this->leeftijd = $leeftijd;
        $this->geslacht = $geslacht;
    }

    protected function getNaam() {
        return $this->naam;
    }

    protected function getLeeftijd() {
        return $this->leeftijd;
    }

    protected function getGeslacht() {
        return $this->geslacht;
    }
}
?>