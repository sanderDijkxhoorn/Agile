<?php

class Vierkant extends Figuur
{
    private $zijde;

    public function __construct($zijde)
    {
        $this->zijde = $zijde;
    }

    public function getOmtrek()
    {
        return $this->zijde * 4;
    }
}

?>