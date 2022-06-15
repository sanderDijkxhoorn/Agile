<?php

require("Models/Figuur.php");
require("Models/Cirkel.php");
require("Models/Vierkant.php");

$cirkel = new Cirkel(25.67);

echo "De circkel heeft een omtrek van: ". $cirkel->getOmtrek();

echo "<hr>";

$vierkant = new Vierkant(56.43);

echo "Het vierkantje heeft een omtrek van: ". $vierkant->getOmtrek();
?>