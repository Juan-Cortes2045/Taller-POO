<?php

include_once 'Person.php';
include_once 'Plan.php';    

class Student extends Person {
    private string $description;
    private Plan $plan;

    public function __construct(string $names, string $lastNames, int $id, string $residenceAddress, int $phoneNumber, string $rh, Plan $plan) {
        parent::__construct($names, $lastNames, $id, $residenceAddress, $phoneNumber, $rh);
       
        $this->plan = $plan;
    }
    public function getPlan(): Plan {
        return $this->plan;
    }

    public function getDescription():string{
        $this->description= "Name: ".$this->getNames()." ".$this->getLastNames()."<br>".
                            "ID: ".$this->getId()."<br>".
                            "Address: ".$this->getResidenceAddress()."<br>".
                            "Phone: ".$this->getPhoneNumber()."<br>".
                            "RH: ".$this->getRh()."<br>";

        return $this->description;
    }

}