<?php


abstract class Person {
    private string $name;
    private string $lastname;
    private int $age;
    private int $identification;

    public function __construct(string $name, string $lastname, int $age, int $identification) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->identification = $identification;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getLastname(): string {
        return $this->lastname;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function getIdentification(): int {
        return $this->identification;
    }

   
    abstract public function getDescription(): string;
    abstract public function getNetSalary(): float;
}