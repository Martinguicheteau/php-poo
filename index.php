<?php
class  Person { 
    private $firstname;
    private $lastname;

    public function setFirstname($pFirstname){
        $this->firstname = $pFirstname;
    }
    Public function setLastname($pLastname){
        $this->lastname = $pLastname;
    }
}

$person1 = new Person();
//$Person1->firstname = "John";
//$Person1->lastname = "Doe";
$person1->setFirstname("John");
$person1->setLastname("Doe");

var_dump($person1);

//$Person2 = new Person();
//$Person2->firstname = "John";
//$Person2->lastname = "Die";

//var_dump($Person2);