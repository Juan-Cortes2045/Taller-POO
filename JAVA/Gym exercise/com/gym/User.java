package com.gym;

public class User extends Person {
  
    private int weigh;
    private double stature;
    private Plan plan;
    

    public User(String names, String lastNames, int id, int weigh, double stature, Plan plan) {
        super(names, lastNames, id);
        this.weigh = weigh;
        this.stature = stature;
        this.plan=plan;
    }



    public int getWeigh() {
        return this.weigh;
    }   

    public double getStature() {
        return this.stature;
    }

    public Plan getPlan() {
        return this.plan;
    }

    @Override
    public String getDescription() {
        return "Full name: " + getNames() + " " + getLastNames() + ", ID: " + getId();
    }
}