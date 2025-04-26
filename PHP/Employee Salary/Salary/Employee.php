<?php



include_once 'Person.php';
include_once 'Discounts.php';

class Employee extends Person {
    private float $salary;
    private float $subsidy;
    private int $minimumWage;
    private int $daysWorked;
    private int $normalHours;
    private int $daytimeOvertime;
    private int $nightimeOvertime;
    private int $holidaysOvertime;
    private Discounts $nDiscounts;
    private float $netSalary;
    private string $description;
    private string $nlevelRisk;

    public function __construct(string $name, string $lastname, int $age, int $identification, float $salary, string $nlevelRisk) {
        parent::__construct($name, $lastname, $age, $identification);
        $this->minimumWage = 1400000;
        $this->salary = $salary;
        $this->subsidy = ($salary < ($this->minimumWage * 2)) ? $this->minimumWage : 0;
        $this->daysWorked = 26;
        $this->normalHours = $this->daysWorked * 8;
        $this->daytimeOvertime = 15;
        $this->nightimeOvertime = 10;
        $this->holidaysOvertime = 8;
        $this->nlevelRisk=$nlevelRisk;
        $this->nDiscounts = new Discounts($this,[$nlevelRisk]);
    }

    public function getMinimumWage(): int {
        return $this->minimumWage;
    }

    public function getSalary(): float {
        return $this->salary;
    }

    public function getSubsidy(): float {
        return $this->subsidy;
    }

    public function getDaysWorked(): int {
        return $this->daysWorked;
    }

    public function getNormalHours(): int {
        return $this->normalHours;
    }

    public function getDaytimeOvertime(): int {
        return $this->daytimeOvertime;
    }

    public function getNightimeOvertime(): int {
        return $this->nightimeOvertime;
    }

    public function getHolidaysOvertime(): int {
        return $this->holidaysOvertime;
    }

    public function getNLevelRisk():string {
        return $this->nlevelRisk;
    }

    public function getNetSalary(): float {
        $this->netSalary= ($this->getSalary() + $this->getSubsidy() + $this->nDiscounts->getExtras()) - $this->nDiscounts->getTotalDiscounts();
        return $this->netSalary;
    }
    

    public function getDescription(): string {
        $this->description=  "Nombre: " . $this->getName() ."<br>". "Apellido: " . $this->getLastname() ."<br>".
        " Edad: " . $this->getAge() ."<br>". "Identificación: " . $this->getIdentification();
        return $this->description;
    }

    public function showData(): void {
        echo "Los datos del empleado son: " ."<br>". $this->getDescription() ."<br>";
        echo "El salario es: " . $this->getSalary() . "<br>";
        echo "El subsidio es de: " . $this->getSubsidy() . "<br>";
        echo "La cantidad de días trabajados es: " . $this->getDaysWorked() . "<br>";
        echo "La cantidad de horas normales trabajadas es: " . $this->getNormalHours() . "<br>";
        echo "La cantidad de horas extras diurnas trabajadas es: " . $this->getDaytimeOvertime() . "<br>";
        echo "La cantidad de horas extras nocturnas trabajadas es: " . $this->getNightimeOvertime() . "<br>";
        echo "La cantidad de horas extras de festivos es: " . $this->getHolidaysOvertime() . "<br>";
        echo "El salario neto es: " . $this->getNetSalary() . "<br>";
        echo "Nivel de riesgo: ".$this->getNLevelRisk() . "<br>";
        $this->nDiscounts->show();
    }
}
