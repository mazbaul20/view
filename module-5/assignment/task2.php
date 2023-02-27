<?php
//Assignment Module-5 Task-2
class Person{
    public $name;
    public $email;

    function setName($name){
        $this->name = $name;
    }
    function setEmail($email){
        $this->email = $email;
    }
    function getName(){
        return $this->name;
    }
    function getEmail(){
        return $this->email;
    }
    function Display(){
        echo "Person Name is {$this->name}\n";
        echo "Person Email is {$this->email}\n";
    }
}

$person = new Person();
$person->setName("Mazbaul");
$person->setEmail("mazbaul@gmail.com");

echo $person->getName()."\n";
echo $person->getEmail();
