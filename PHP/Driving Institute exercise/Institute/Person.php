<?php

abstract class Person {
    private string $names;
    private string $lastNames;
    private int $id;
    private string $residenceAddress;
    private int $phoneNumber;
    private string $rh;


    public function __construct(string $names, string $lastNames, int $id, string $residenceAddress, int $phoneNumber, string $rh) {
        $this->names = $names;
        $this->lastNames = $lastNames;
        $this->id = $id;
        $this->residenceAddress = $residenceAddress;
        $this->phoneNumber = $phoneNumber;
        $this->rh = $rh;
    }

    public function getNames(): string {
        return $this->names;
    }

    public function getLastNames(): string {
        return $this->lastNames;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getResidenceAddress(): string {
        return $this->residenceAddress;
    }

    public function getPhoneNumber(): int {
        return $this->phoneNumber;
    }

    public function getRh(): string {
        return $this->rh;
    }

    abstract public function getDescription(): string;
}