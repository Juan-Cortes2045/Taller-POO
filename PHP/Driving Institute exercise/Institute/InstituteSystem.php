<?php

include_once 'Person.php';
include_once 'Plan.php';
include_once 'Student.php';

class InstituteSystem {
    private array $students;

    public function __construct(){
        $this->students=[];	
    }

    public function addStudent(Student $student): void {
        $this->students[] = $student;
        echo "STUDENT ADDED". "<br>";
    }

    public function studentInfo(Student $student):void{
        echo "Student Information:"."<br>";
        echo $student->getDescription();
        echo "Plan selected: " . $student->getPlan()->getName() . "<br>";
        echo "Licence for: ". $student->getPlan()->getServices()."<br>";
        echo "Monthly Price: $" . $student->getPlan()->getTotalPrice() . "<br>";
        echo "Duration:". $student->getPlan()->getDuration() . " months"."<br>";
        echo "Total Price: $". $student->getPlan()->getTotalPrice() . "<br>";
        echo "----------------------------------------"."<br>";
    }

}