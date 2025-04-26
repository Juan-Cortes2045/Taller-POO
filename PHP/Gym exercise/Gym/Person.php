<?php


abstract class Person {
    private string $names;
    private string $lastNames;
    private int $id;

    public function __construct(string $names, string $lastNames, int $id) {
        $this->names = $names;
        $this->lastNames = $lastNames;
        $this->id = $id;
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

    abstract public function getDescription(): string;
}