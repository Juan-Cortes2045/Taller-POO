package com.Institute;

public class Plan{
    private String name;
    private double price;
    private String services;
    private int duration;
    private double totalPrice;


    public Plan (String name, double price, int duration, String services) {
        this.name = name;
        this.price = price;
        this.services = services;
        this.duration=duration; 
        this.totalPrice= totalPrice;
   }

    public String getName() {
        return this.name;
    }

    public double getPrice() {
        return this.price;
    }

    public String getServices() {
        return this.services;
    }
    
    public int getDuration(){
        return this.duration;
    }
    
    public double getTotalPrice(){
        return this.totalPrice= this.getPrice()*this.getDuration();
    }

   
    

}