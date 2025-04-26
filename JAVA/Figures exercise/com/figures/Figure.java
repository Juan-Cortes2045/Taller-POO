package com.figures;

public class Figure {

    public static void main(String[] args) {

        FigureGeometric Square= new Square(4);
        FigureGeometric Circle= new Circle(10);
        FigureGeometric Triangle= new Triangle(10,9);
        FigureGeometric Rectangle= new Rectangle(7,9);



        System.out.println("Area of " +Square.getNameSpanish()+"::"+Square.calculateArea());
        System.out.println("Area of " +Circle.getNameSpanish()+"::"+Circle.calculateArea());
        System.out.println("Area of " +Triangle.getNameSpanish()+"::"+Triangle.calculateArea());
        System.out.println("Area of " +Rectangle.getNameSpanish()+"::"+Rectangle.calculateArea());
    }
}