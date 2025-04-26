<?php
include_once 'ARL.php';
include_once 'Health.php';
include_once 'Pension.php';

class Deductible {
    private float $calculateDeductible;

    public function __construct(float $salary) {
        $arl = new ARL($salary);
        $health = new Health($salary);
        $pension = new Pension($salary);

        $this->calculateDeductible = $arl->getCalculateARL() + $health->getCalculateHealth() + $pension->getCalculatePension();
    }

    public function getCalculateDeductible(): float {
        return $this->calculateDeductible;
    }
}
