package com.figures;

public class Square extends FigureGeometric {
    private int side;
    private double calculate;

    public  Square(int side) {
        super("Square", "Cuadrado");
        this.side = side;
    }
    public int getSide() {
        return this.side;
    }
    public double calculateArea() {
        this.calculate = this.getSide() * this.getSide();
        return this.calculate;
    }
    
}