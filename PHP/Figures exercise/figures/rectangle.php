<?php
 class Rectangle extends FigureGeometric {

   private float $base;
   private float $height;
   private float $calculate;
   
   public function __construct(float $base, float $height){
       parent::_construct("Rectangle");
       $this-> base= $base;
       $this->height=$height;
   }
   
   public function getBase():float{
       return $this-> base;
   }
   public function getHeight():float{
       return $this-> height;
   }
   public function calculateArea():float{
       $this->calculate = $this-> getBase()* $this->getHeight();
       return $this->calculate;
   }
}