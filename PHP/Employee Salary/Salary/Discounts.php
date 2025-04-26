<?php


include_once 'Employee.php';

class Discounts {
    private float $calculateARL;
    private float $ARL;
    private Employee $employee;
    private array $levelRisk;
    private float $pension;
    private float $health;
    private float $totalDiscounts;
    private float $cDaytimeOvertime;
    private float $cNightimeOvertime;
    private float $cHolidaysOvertime;
    private float $extras;
    private float $hourlyRate;

    public function __construct(Employee $employee, array $levelRisk) {
        $this->levelRisk = $levelRisk;
        $this->ARL = $this->getCalculateARL($employee);
        $this->employee = $employee;
        $this->pension = $employee->getSalary() * 0.04;
        $this->health = $employee->getSalary() * 0.04;
        $this->hourlyRate = $employee->getSalary() / ($employee->getDaysWorked() * 8);
        $this->cDaytimeOvertime = $this->hourlyRate * 1.25 * $employee->getDaytimeOvertime();
        $this->cNightimeOvertime = $this->hourlyRate * 1.75 * $employee->getNightimeOvertime();
        $this->cHolidaysOvertime = $this->hourlyRate * 2 * $employee->getHolidaysOvertime();
        $this->totalDiscounts = $this->ARL + $this->pension + $this->health;
        $this->extras = $this->cDaytimeOvertime + $this->cNightimeOvertime + $this->cHolidaysOvertime;
    }


    public function getCalculateARL($employee) {
        $numLevelRisk = count($this->levelRisk);

        for ($iteration = 0; $iteration < $numLevelRisk; $iteration++) {
            $nlevelRisk = $this->levelRisk[$iteration];

            if (strcasecmp($nlevelRisk, "minimo") == 0) {
                return $employee->getSalary() * 0.00522;
            } elseif (strcasecmp($nlevelRisk, "bajo") == 0) {
                return $employee->getSalary() * 0.01024;
            } elseif (strcasecmp($nlevelRisk, "medio") == 0) {
                return $employee->getSalary() * 0.02436;
            } elseif (strcasecmp($nlevelRisk, "alto") == 0) {
                return $employee->getSalary() * 0.0435;
            }
        }
        return 0;
    }
    
    public function getARL(): float {
        return $this->ARL;
    }

    public function getPension(): float {
        return $this->pension;
    }

    public function getHealth(): float {
        return $this->health;
    }

    public function getHourlyRate(): float{
         return $this->hourlyRate;
    }

    public function getTotalDiscounts(): float {
        return $this->totalDiscounts;
    }

    public function getCDaytimeOvertime(): float {
        return $this->cDaytimeOvertime;
    }

    public function getCNightimeOvertime(): float {
        return $this->cNightimeOvertime;
    }

    public function getCHolidaysOvertime(): float {
        return $this->cHolidaysOvertime;
    }

    public function getExtras(): float {
        return $this->extras;
    }

    public function show(): void {
        echo "El pago por horas es de:". $this->getHourlyRate() . "<br>";
        echo "El ARL equivale a: " . $this->getARL() . "<br>";
        echo "La pensión equivale a: " . $this->getPension() . "<br>";
        echo "La salud equivale a: " . $this->getHealth() . "<br>";
        echo "El total de descuentos equivale a: " . $this->getTotalDiscounts() . "<br>";
        echo "El total de dinero generado en las horas extras diurnas equivale a: " . $this->getCDaytimeOvertime() . "<br>";
        echo "El total de dinero generado en las horas extras nocturnas equivale a: " . $this->getCNightimeOvertime() . "<br>";
        echo "El total de dinero generado en las horas extras festivas equivale a: " . $this->getCHolidaysOvertime() . "<br>";
        echo "El total de dinero generado en las horas extras equivale a: " . $this->getExtras() . "<br>";
    }
}