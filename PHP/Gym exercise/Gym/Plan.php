<?php

class Plan {
    private string $name;
    private int $price;
    private array $services;

    public function __construct(string $name, int $price, array $services) {
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

    public function getServices(): array {
        return $this->services;
    }

    public function showServices(): void {
        echo "SERVICES INCLUDED:"."<br>";
        foreach ($this->getServices() as $service) {
            echo "- $service"."<br>";
        }
    }
}