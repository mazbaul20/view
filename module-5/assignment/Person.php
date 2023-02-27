<?php
//copy 2nd task
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
    //just test perpos 
    function Display(){
        echo "Person Name is {$this->name}\n";
        echo "Person Email is {$this->email}\n";
    }
}

// $person = new Person();
// $person->setName("Mazbaul");
// $person->setEmail("mazbaul@gmail.com");

// echo $person->getName()."\n";
// echo $person->getEmail();
// $person->Display();