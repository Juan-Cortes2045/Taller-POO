<?php

include_once 'Gym/GymSystem.php';
$basicPlan = new Plan("Basic", 50000, "General access");
$mediumPlan = new Plan("Medium", 100000, "General access, Directed classes");
$premiumPlan = new Plan("Premium", 150000, "General access, Directed classes, Personal trainer, Humed zone");

$gymSystem = new GymSystem();

$user1 = new User("Juan Esteban", "Cortes Parra", 123456, 70, 1.75, $basicPlan);
$user2 = new User("Marcela", "Perez Trujillo", 214873, 60, 1.65, $premiumPlan);
$user3= new User("Pedro Antonio", "Gonzalez Silva", 987654, 80, 1.80, $mediumPlan);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym</title>
</head>
<body>
    <h1>Gym</h1>
    <?php
    
    $gymSystem->addUser($user1);
    $gymSystem->userInfo($user1);

    $gymSystem->addUser($user2);
    $gymSystem->userInfo($user2);

    $gymSystem->addUser($user3);    
    $gymSystem->userInfo($user3);
    
    ?>
</body>
</html>