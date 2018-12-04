<?php
class  Person { 
    private $firstname;
    private $lastname;

    public function setFirstname($pFirstname){
        $this->firstname = $pFirstname;
    }

    public function getFirstname(){
        return $this->firstname;
    }

    Public function setLastname($pLastname){
        $this->lastname = $pLastname;
    }

    public function getLastname(){
        return $this->lastname;
    }
    Public function speak(){
        return "hello my name is " . $this->firstname . " " . $this->lastname;
    }
}

$person1 = new Person();
//$Person1->firstname = "John";
//$Person1->lastname = "Doe";


$person1->setFirstname("John");
$person1->setLastname("Doe");

var_dump($person1->speak());
//var_dump($person1);
//var_dump($person1->getFirstname());
//var_dump($person1->getLastname());

//$person2 = new Person();
//$Person2->firstname = "John";
//$Person2->lastname = "Die";
//$person2->setFirstname("John");
//$person2->setLastname("Die");

//var_dump($person2);