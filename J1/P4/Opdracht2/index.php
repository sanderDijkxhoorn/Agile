<?php

interface iPerson
{
    public function setAge($age);
    public function getName();
}


class Person implements iPerson
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }
}

$Turik = new Person("Pursun", "18");

echo $Turik->getName();

?>
