<?php
include_once 'Laws.php';

class FirstLaw extends Laws{
    
    private String $calculate;
    private String $name;

    public function __construct(int $object) {
        parent::__construct($object);
        $this->calculate="";
        $this->name="First Law";

    }

    public function getfirstLaw(): String {
        $this->calculate=($this->getObject()===0)
        ?  "The object maintains its state:" 
        :  "The object is being affected by an external force";
        return $this->calculate;
    }

    public function getExplain(): string {
        return "Every body remains in its state of rest or uniform rectilinear motion unless acted upon by an external force.";
    }

    public function getName(): string {
        return $this->name;
    }
}