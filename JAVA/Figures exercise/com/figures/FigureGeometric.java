package com.figures;


public abstract class FigureGeometric {
    private final String name;
    private final String nameSpanish;

    public FigureGeometric(String name, String nameSpanish) {
        this.name = name;
        this.nameSpanish = nameSpanish;
    }
    
    public String getName(){
        return this.name;
    }
    public String getNameSpanish(){
        return this.nameSpanish;
    }

    public abstract double calculateArea();
    
}

