<?php
include_once 'Laws.php';
include_once 'FirstLaw.php';
include_once 'SecondLaw.php';
include_once 'ThirdLaw.php';
 

class NewtonLawsSystem{
    private array $laws;

    public function __construct(){
        $this->laws = [];
    }

    public function addLaw(Laws $law): void {
        $this->laws[] = $law;
    }
    
    public function showLaws():void{
        $numLaws = count($this->laws);
    
        for ($iteration=0; $iteration<$numLaws; $iteration++) {
            $law = $this->laws[$iteration];

            if ($law instanceof FirstLaw) {
                echo "Name: " . $law->getName() . "<br>";
                echo "Explanation: " . $law->getExplain() . "<br>";
                echo "The mass of the entered object is:". $law->getObject()."Kg"."<br>";
                echo "Result: " . $law->getFirstLaw() . "<br>";
                
            }
            elseif ($law instanceof SecondLaw) {
                echo "Name: " . $law->getName() . "<br>";
                echo "Explanation: " . $law->getExplain() . "<br>";
                echo "The mass of the entered object is:". $law->getObject()."Kg"."<br>";
                echo "The acceleration of the entered object is:". $law->getAcceleration()."m/s^2"."<br>";
                echo "Result: " . $law->getSecondLaw() . "N" ."<br>";
            }
            elseif ($law instanceof ThirdLaw) {
                echo "Name: " . $law->getName() . "<br>";
                echo "Explanation: " . $law->getExplain() . "<br>";
                echo "The mass of the entered object is:". $law->getObject()."Kg"."<br>";
                echo "The mass of the second object is:". $law->getMassSecondObject()."Kg"."<br>";
                echo "Result: " . $law->getThirdLaw() . "<br>";
            }
            echo "----------------------------------------<br>";
        }

    }



    public static function main(): void {
    
        $firstLaw = new FirstLaw(20); 
        $secondLaw = new SecondLaw(20, 5); 
        $thirdLaw = new ThirdLaw(20,30);

    
        $newtonLawsSystem = new NewtonLawsSystem();

   
        $newtonLawsSystem->addLaw($firstLaw);
        $newtonLawsSystem->addLaw($secondLaw);
        $newtonLawsSystem->addLaw($thirdLaw);

    
        $newtonLawsSystem->showLaws();
    }
}