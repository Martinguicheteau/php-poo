<?php
abstract class animal{
    private $years = 0;

   
    public function getYears(): int
    {
        return $this->years;
    }

   
    public function setYears(int $years): void
    {
        $this->years = $years;
    }

    public function __construct($years)
    {
        $this->years = $years;
    }

}

abstract class Mammal extends animal{
}



final class Person extends Mammal {
private $firstname;
private $lastname;

public function __construct(string $pFirstname, string $pLastname, int $pYears) {
    parent::__construct($pYears);
    $this->firstname = $pFirstname;
    $this->lastname = $pLastname;
}
}
final class Dog extends Mammal{
    private $name;

    public function __construct(string $pName, int $pYears) {
        parent::__construct($pYears);
        $this->name = $pName;
    }
    
}

abstract class oviparous extends animal{
    private $isMoult;
}

final class gecko extends oviparous{
    private $name;
    public function __construct(string $pName, int $pYears) {
        parent::__construct($pYears);
        $this->name = $pName;
    }
}


$person = new Person("John", "Doe", 1);
var_dump($person);
$dog = new Dog("bobby", 1);
var_dump($dog);
$gecko = new gecko("Robert", 1);
var_dump($gecko);
