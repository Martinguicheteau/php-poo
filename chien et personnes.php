<?php
class Person{
private $firstname;
private $lastname;
private $dogs;

public function __construct($pFirstname, $pLastname){
    $this->firstname = $pFirstname;
    $this->lastname = $pLastname;
}

public function getfirstname(){
    return $this->firstname;
}

public function getlastname(){
return $this->lastname;
}

public function speak(){
    $string = "Je suis $this->firstname $this->lastname et mes chiens sont : ";
    $listDogs = array();
    foreach ($this->dogs as $dog) {
        $listDogs[] = $dog->getName();
    }
    return $string . implode(', ', $listDogs);
}
public function buy($pDog){
    $pDog->setOwner($this);
    $this->dogs[] = $pDog;
}
}
class Dog{
    private $name;
    private $owner;

    public function __construct($pName){
        $this->name = $pName;
    }

    public function getName(){
        return $this->name;
    }

    public function setOwner($pOwner){
        $this->owner = $pOwner;
    }
   public function speak(): string {
       // return "Je suis ".$this->name." et mon maitre est ".$this->owner->getfirstname()." ".$this->owner->getlastname();
   }
}

$person = new Person ("John", "Doe");
$dog = new Dog ("Jhonny");
$person->buy($dog);
var_dump($person->speak());
//var_dump($dog->speak());
