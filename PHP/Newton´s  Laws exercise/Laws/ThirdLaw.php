<?php
include_once 'Laws.php';

class ThirdLaw extends Laws{
    
    private String $calculate;
    private String $name;
    private int $massSecondObject;

    public function __construct(int $object,int $massSecondObject ) {
        parent::__construct($object);
        $this->calculate="";
        $this->name="Third Law";
        $this->massSecondObject=$massSecondObject;

    }
    public function getMassSecondObject(): int {
        return $this->massSecondObject;
    }

    public function getThirdLaw(): String {
        $this->calculate=($this->getObject()==$this->getMassSecondObject()) 
        ? "The object is pushed backward by another object with the same mass (action) and this in turn moves forward (reaction)."
        :"The object is pushed backward by another object (action) and this in turn moves forward (reaction). They both have different masses";
        return $this->calculate;
    }

    public function getExplain(): string {
        return "Every action has an equal and opposite reaction.";
    }

    public function getName(): string {
        return $this->name;
    }
}