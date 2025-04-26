package com.Laws;


public class SecondLaw extends Laws {
    
    private double calculate;
    private String name;
    private int acceleration;

    public SecondLaw(int object, int acceleration) {
        super(object);
        this.calculate = 0;
        this.name = "Second Law";
        this.acceleration = acceleration;
    }

    public String getName() {
        return this.name;
    }
    
    public int getAcceleration() {
        return this.acceleration;
    }

    public double getSecondLaw() {
        this.calculate = (this.getObject() * this.getAcceleration());
        return this.calculate;
    }

    @Override
    public String getExplain() {
        return "The acceleration of an object is directly proportional to the net force acting on it, and inversely proportional to its mass.";
    }

  
}