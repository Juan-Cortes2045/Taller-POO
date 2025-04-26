<?php
 class Square extends FigureGeometric {

    private float $side;
    private float $calculate;
    
    public function __construct(float $side){
        parent::_construct("Square");
        $this-> side= $side;
    }
    public function getSide():float{
        return $this-> side;
    }
    public function calculateArea():float{
        $this->calculate = $this->getSide()* $this->getSide();
        return $this->calculate;
    }
}
