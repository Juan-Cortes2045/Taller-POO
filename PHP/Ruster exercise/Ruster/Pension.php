<?php
class Pension extends Person {
    private float $calculatePension;

    public function __construct(float $salary) {
        $this->salary = $salary;
        $this->calculatePension = $this->salary * 0.04;
    }

    public function getCalculatePension(): float {
        return $this->calculatePension;
    }

    public function getDescription(): string {}
    public function getNetSalary(): float {}
}


