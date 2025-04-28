package com.gym;


import java.util.ArrayList;
import java.util.List;

public class GymSystem{
  private List<User> users;

  public GymSystem () {
    this.users = new ArrayList<>();

  }
    public void addUser(User user) {
        users.add(user);
        System.out.println("USER ADDED");

    }

    public void userInfo(User user){
        System.out.println("User Information:");
        System.out.println( user.getDescription());
        System.out.println("Weight: " + user.getWeigh() + " kg");
        System.out.println("Stature: " + user.getStature() + " m");
        System.out.println("Plan selected: " +user.getPlan().getName());
        System.out.println("Services: " + user.getPlan().getServices());
        System.out.println("Price: $" + user.getPlan().getPrice());
        System.out.println();

    }

    public static void main(String[]args){
       Plan basicPlan= new Plan("Basic", 50000, "General access");
       Plan mediumPlan= new Plan("Medium", 100000, "General access, Directed classes");
       Plan premiumPlan= new Plan("Premium", 150000, "General access, Directed classes, Personal trainer, Humed zone");

       GymSystem gymsystem= new GymSystem();

       User user1= new User("Juan", "Pérez", 123456, 70, 1.75, basicPlan);
       User user2= new User("Maria", "Parra", 214873, 60, 1.65, premiumPlan);
       User user3= new User("Pedro", "Gonzalez", 987654, 80, 1.80, mediumPlan);

        gymsystem.addUser(user1);
        gymsystem.userInfo(user1);

        gymsystem.addUser(user2);
        gymsystem.userInfo(user2);

        gymsystem.addUser(user3);
        gymsystem.userInfo(user3);
    }
        

    
}