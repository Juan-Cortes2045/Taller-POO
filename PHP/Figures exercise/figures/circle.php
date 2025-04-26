<?php
class Circle extends FigureGeometric {

    private float $radio;
    private float $pi;
    private float $calculate;
    
    public function __construct(float $radio){
        parent::_construct("Circle");
        $this->radio = $radio;
        $this->pi = 3.1416;
    }
    public function getRadio ():float{
        return $this-> radio;
    }
    public function  getPi():float{
        return $this-> pi;
    }
    public function calculateArea():float{
        $this->calculate = $this->getRadio()* $this->getRadio()* $this->getPi();
        return $this->calculate;
    }
}