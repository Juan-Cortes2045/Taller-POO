<?php

include_once 'Institute/InstituteSystem.php';


$planA= new Plan("Plan A", 50000, 2, "Motorcycles");
$planB= new Plan("Plan B", 100000,3, "Private Vehicles");
$planC= new Plan("Plan C", 150000,6, "Public service vehicles");

$instituteSystem= new InstituteSystem();

 $student1= new Student("Juan Esteban", "Pérez Collazos", 123456, "Cra 8 #27",67864356, "O+",$planA);
 $student2= new Student("Maria", "Parra Valenzuela", 214873, "Cra 9 #6", 6784560,"A-", $planB);
 $student3= new Student("Juan Camilo","Lozano Silva", 123475,"Cr 15 #2", 6547398,"O+", $planC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insitute System</title>
</head>
<body>
    <h1>Institute System</h1>
    <?php
    $instituteSystem->addStudent($student1);
    $instituteSystem->studentInfo($student1);
    
    $instituteSystem->addStudent($student2);
    $instituteSystem->studentInfo($student2);

    $instituteSystem->addStudent($student3);
    $instituteSystem->studentInfo($student3);
    ?>
</body>
</html>