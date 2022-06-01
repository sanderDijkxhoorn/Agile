<?php
require("Models/Werknemer.php");

$JonathanDeVries = new Werknemer("Jonathan De Vries", "25", "M", "€500,00", "Programmeur");

echo "<hr>";

echo "Naam: ". $JonathanDeVries->getNaam();

echo "<hr>";

echo "Leeftijd: ". $JonathanDeVries->getLeeftijd();

echo "<hr>";

echo "Geslacht: ". $JonathanDeVries->getGeslacht();

echo "<hr>";

echo "Salaris: ". $JonathanDeVries->getSalaris();

echo "<hr>";

echo "Functie: ". $JonathanDeVries->getFunctie();

echo "<hr>";
?>