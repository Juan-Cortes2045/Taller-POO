<?php
class Health extends Person {
    private float $calculateHealth;

    public function __construct(float $salary) {
        $this->salary = $salary;
        $this->calculateHealth = $salary * 0.12;
    }

    public function getCalculateHealth(): float {
        return $this->calculateHealth;
    }

    public function getDescription(): string {}
    public function getNetSalary(): float {}
}


