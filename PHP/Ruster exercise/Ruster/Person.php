<?php
abstract class Person {
    private const DefaultDaysWorked =26;

    private string $name;
    private int $identification;
    private float $valueOftheDay;
    private int $daysWorked;
    private float $salary;
    private float $subTransport;

    public function __construct(string $name, int $identification, float $valueOftheDay, ?int $daysWorked=null) {
        $this->name = $name;
        $this->identification = $identification;
        $this->daysWorked = $daysWorked ?? self::DefaultDaysWorked;
        $this->valueOftheDay = $valueOftheDay;
        $this->salary = $this->daysWorked * $this->valueOftheDay;
        $this->subTransport = ($this->salary < 2000000) ? 114000 : 0;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getIdentification(): int {
        return $this->identification;
    }

    public function getDaysWorked(): int {
        return $this->daysWorked;
    }

    public function getValueOftheDay(): float {
        return $this->valueOftheDay;
    }

    public function getSalary(): float {
        return $this->salary;
    }

    public function getSubTransport(): float {
        return $this->subTransport;
    }

    public abstract function getDescription(): string;
    public abstract function getNetSalary(): float;
}
