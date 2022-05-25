<?php

include("./Models/Person.php");

$Turik = new Person("Pursun", 18);

echo $Turik->getName();

$Turik->setAge(19);


?>
