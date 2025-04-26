<?php
class ARL extends Person {
    private float $calculateARL;

    public function __construct(float $salary) {
        $this->salary = $salary;
        $this->calculateARL = $this->salary * 0.052;
    }

    public function getCalculateARL(): float {
        return $this->calculateARL;
    }


    public function getDescription(): string {}
    public function getNetSalary(): float {}
}



