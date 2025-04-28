package com.gym;

public class Plan{
    private String name;
    private double price;
    private String services;


    public Plan (String name, double price, String services) {
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

    public String getServices() {
        return this.services;
    }
}

