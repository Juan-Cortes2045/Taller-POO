<?php
include_once 'Laws.php';

class SecondLaw extends Laws{
    
    private float $calculate;
    private String $name;
    private int $acceleration;

    public function __construct(int $object,int $acceleration) {
        parent::__construct($object);
        $this->calculate=0;
        $this->name="Second Law";
        $this->acceleration=$acceleration;
    }

    public function getAcceleration(): int {
        return $this->acceleration;
    }

    public function getSecondLaw(): float {
        $this->calculate=($this->getObject()* $this->getAcceleration());
        return $this->calculate;
    }

    public function getExplain(): string {
        return "The acceleration of an object is directly proportional to the net force acting on it, and inversely proportional to its mass.";
    }

    public function getName(): string {
        return $this->name;
    }
}