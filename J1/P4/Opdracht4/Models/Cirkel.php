<?php

class Cirkel extends Figuur
{
    private $straal;

    public function __construct($straal)
    {
        $this->straal = $straal;
    }

    public function getOmtrek()
    {
        return 2 * $this->straal * pi();
    }
}

?>