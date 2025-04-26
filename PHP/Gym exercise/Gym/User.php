<?php
include_once 'Person.php';
include_once 'User.php';
include_once 'Plan.php';

class User extends Person {
    private int $weigh;
    private float $stature;
    private Plan $plan;

    public function __construct(string $names, string $lastNames, int $id, int $weigh, float $stature, Plan $plan) {
        parent::__construct($names, $lastNames, $id);
        $this->weigh = $weigh;
        $this->stature = $stature;
        $this->plan = $plan;
    }

    public function getWeigh(): int {
        return $this->weigh;
    }

    public function getStature(): float {
        return $this->stature;
    }

    public function getPlan(): Plan {
        return $this->plan;
    }

    public function getDescription(): string {
        return "Full name: " . $this->getNames() . " " . $this->getLastNames() . "<br>". "ID: " . $this->getId();
    }
}