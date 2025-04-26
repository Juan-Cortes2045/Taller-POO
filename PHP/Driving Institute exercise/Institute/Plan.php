<?php

class Plan {
    private string $name;
    private float $price;
    private string $services;
    private int $duration; 
    private float $totalPrice;
    
    public function __construct(string $name, int $price,int $duration, string $services){
        $this->name = $name;
        $this->price = $price;
        $this->duration = $duration; 
        $this->services = $services;
        $this->totalPrice = $this->price * $this->duration;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice():float{
        return $this->price;
    }

    public function getDuration():int{
        return $this->duration;
    }

    public function getServices(): string {
        return $this->services;
    }

    public function getTotalPrice(): float {
        return $this->totalPrice;
    }

 
    
}