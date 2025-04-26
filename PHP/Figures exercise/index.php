<?php
include ('figures/FigureGeometric.php');
include ('figures/square.php');
include ('figures/circle.php');
include ('figures/triangle.php');
include ('figures/rectangle.php');

$square= new Square(10);
$circle= new Circle(5);
$triangle= new Triangle(5,10);
$rectangle= new Rectangle(6,10);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     echo "El área del cuadrado es: " . $square->calculateArea(). "<br>";
     echo "El área del círculo es: " . $circle->calculateArea(). "<br>";
     echo "El area del triangulo es:". $triangle->calculateArea(). "<br>";
     echo "El área del rectángulo es: " . $rectangle->calculateArea(). "<br>";
 
    ?>
            

    
</body>
</html>