<?php

class Plan {
    private string $name;
    private int $price;
    private string $services;

    public function __construct(string $name, int $price, string $services) {
        $this->name = $name;
        $this->price = $price;
        $this->services = $services;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): int {
        return $this->price;
    }

    public function getServices(): String {
        return $this->services;
    }

  
    
}