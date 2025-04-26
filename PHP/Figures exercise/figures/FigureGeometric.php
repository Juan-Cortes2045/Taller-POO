<?php
abstract class FigureGeometric{
    private String $name;
   
    
    public function _construct ( String $name){
        $this->name= $name;

    }
    public function getName():String{
        return $this->name;
    }

    
    public abstract function calculateArea():float;
}