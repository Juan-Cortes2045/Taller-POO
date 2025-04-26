<?php

include_once 'Salary/Employee.php';



$employee = new Employee("Juan", "Cortes", 30, 122342374, 2000000, "minimo");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Empleado</title>
</head>
<body>
    <h1>Información del Empleado</h1>
    <?php
    
    echo $employee->showData();
    ?>
</body>
</html>