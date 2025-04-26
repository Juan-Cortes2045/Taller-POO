package com.figures;

public class Triangle extends FigureGeometric {
    private int base;
    private int height;
    private double calculate;

    public  Triangle (int base, int height) {
        super("Triangle", "Triangulo");
        this.base = base;
        this.height= height;
    }
    public int getBase() {
        return this.base;
    }
    public int getHeight(){
        return this.height;
    }
    public double calculateArea() {
        this.calculate = (this.getBase() * this.getHeight())/2;
        return this.calculate;
    }
    
}