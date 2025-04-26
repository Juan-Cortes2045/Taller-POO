<?php
include_once 'Person.php';
include_once 'Deductible.php';

class Supervisor extends Person {
    private int $numberCoach;
    private float $bond;
    private float $nDeductible;
    private float $nHealth;
    private float $nPension;
    private float $nARL;

    public function __construct(string $name, int $identification, float $valueOftheDay, int $numberCoach, ?int $daysWorked=null) {
        parent::__construct($name, $identification, $valueOftheDay, $daysWorked);
        $this->numberCoach = $numberCoach;
        $this->bond= $numberCoach*60000;
        $deductible= new Deductible($this->getSalary());
        $this->nDeductible= $deductible->getCalculateDeductible();
        $health= new Health($this->getSalary());
        $this->nHealth= $health->getCalculateHealth();
        $pension= new Pension($this->getSalary());
        $this->nPension= $pension->getCalculatePension();
        $arl= new ARL($this->getSalary());
        $this->nARL= $arl->getCalculateARL();
        
    }
    

    public function getNumberCoach(): int {
        return $this->numberCoach;
    }

    public function getBond(): float {
        return $this->bond;
    }

    public function getNDeductible(): float {
       return $this->nDeductible;
    }

    public function getNHealth(): float {
        return $this->nHealth;
    }

    public function getNPension(): float {
        return $this->nPension;
    }

    public function getNARL(): float {
        return $this->nARL;
    }

    public function getDescription(): string {
        return "Name: " . $this->getName() . " - ID: " . $this->getIdentification();
    }

    public function getNetSalary(): float {
        return ($this->getSalary() + $this->getSubTransport() + $this->getBond()) - $this->getNDeductible();
    }
}