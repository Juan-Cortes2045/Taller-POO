<?php
include_once 'Person.php';
include_once 'User.php';
include_once 'Plan.php';

class GymSystem {
    private array $users;

    public function __construct() {
        $this->users = [];
    }

    public function addUser(User $user): void {
        $this->users[] = $user;
        echo "USER ADDED"."<br>";
    }

    public function userInfo(User $user): void {
        echo "User Information:"."<br>";
        echo $user->getDescription() . "<br>";
        echo "Weight: " . $user->getWeigh() . " kg"."<br>";
        echo "Stature: " . $user->getStature() . "m"."<br>";
        echo "Plan selected: " . $user->getPlan()->getName() . "<br>";
        $user->getPlan()->showServices();
        echo "Price: $" . $user->getPlan()->getPrice() . "<br>";
        echo "----------------------------------------"."<br>";
    }

 

}


