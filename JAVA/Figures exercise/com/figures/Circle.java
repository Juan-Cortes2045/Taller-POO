package com.figures;

public class Circle extends FigureGeometric {
    
    private double radio;
    private double pi;
    private double calculate;
    
    public Circle(double radio){
        super("Circle", "Circulo");
        this.radio = radio;
        this.pi= 3.1416;
     
    }
    
    public double getRadio(){
        return this.radio;
    }
    public double getPi(){
        return this.pi;
    }
    
    public double calculateArea(){
        this.calculate = (this.getRadio() * this.getRadio())* this.getPi();
        return this.calculate;
    }
}