package com.figures;

public class Rectangle extends FigureGeometric {
    private int base;
    private int height;
    private double calculate;

    public  Rectangle (int base, int height) {
        super("Rectangle", "Rectangulo");
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
        this.calculate = this.getBase() * this.getHeight();
        return this.calculate;
    }
    
}