package com.gym;

public class Plan{
    private String name;
    private double price;
    private String[] services;


    public Plan (String name, double price, String[] services) {
        this.name = name;
        this.price = price;
        this.services = services;
    }

    public String getName() {
        return this.name;
    }

    public double getPrice() {
        return this.price;
    }

    public String[] getServices() {
        return this.services;
    }

    public void showServices(){
        System.out.println("Services included in the plan: ");
        for (String service : this.getServices()) {
            System.out.println("- " + service);
        }
    }

}