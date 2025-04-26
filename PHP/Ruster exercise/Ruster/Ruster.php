<?php
include 'Supervisor.php';
include 'Admin.php';
include 'Coach.php';


class Ruster {
    private Coach $coach;
    private Supervisor $supervisor;
    private Admin $admin;
    private string $show;

public function __construct(){
    $this->coach= new Coach("Juan", 123456, 60000, 21);
    $this->supervisor= new Supervisor("Pedro", 654321, 80000, 8);
    $this->admin= new Admin("Maria", 789456, 100000);
    $this-> showRuster();
}


    

    public function showRuster(): string {
    $this->show="";

        $this->show .= "La informacion del entrenador: " . $this->coach->getDescription() . "<br>";
        $this->show .= "El salario neto es: " . $this->coach->getNetSalary() . "<br>";
        $this->show .= "El bono total es de:" . $this->coach->getBond() . "<br>";
        $this->show .= "La cantidad de clientes son:". $this->coach->getNumberClients()."<br>";
        $this->show .= "Total de descuentos:". $this->coach->getNDeductible()."<br>";
        $this->show .= "La salud equivale a:" . $this->coach->getNHealth() . "<br>";
        $this->show .= "La pension equivale a:" . $this->coach->getNPension() . "<br>";
        $this->show .= "El ARL equivale a:" . $this->coach->getNARL() . "<br>"."<br>";

        $this->show .= "La informacion del Supervisor: " . $this->supervisor->getDescription() . "<br>";
        $this->show .= "El salario neto es: " . $this->supervisor->getNetSalary() . "<br>";
        $this->show .= "El bono total es de:" . $this->supervisor->getBond() . "<br>";
        $this->show .= "La cantidad de coach que cumplieron su meta fueron:". $this->supervisor->getNumberCoach()."<br>";
        $this->show .= "Total de descuentos:". $this->supervisor->getNDeductible()."<br>"; 
        $this->show .= "La salud equivale a:" . $this->supervisor->getNHealth() . "<br>";
        $this->show .= "La pension equivale a:" . $this->supervisor->getNPension() . "<br>";
        $this->show .= "El ARL equivale a:" . $this->supervisor->getNARL() . "<br>"."<br>";

        $this->show .= "La informacion del Admin: " . $this->admin->getDescription() . "<br>";
        $this->show .= "El salario neto es: " . $this->admin->getNetSalary() . "<br>";
        $this->show .= "Total de descuentos:". $this->admin->getNDeductible()."<br>";
        $this->show .= "La salud equivale a:" . $this->admin->getNHealth() . "<br>";
        $this->show .= "La pension equivale a:" . $this->admin->getNPension() . "<br>";
        $this->show .= "El ARL equivale a:" . $this->admin->getNARL() . "<br>";

    return $this->show;
    
    }

    public function getShowRuster(): string {
        return $this->show;
    }
}





