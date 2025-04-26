package com.gym;


public abstract class Person{
    private String names;
    private String lastNames;
    private int id;

    public Person(String names, String lastNames, int id) {
        this.names = names;
        this.lastNames = lastNames;
        this.id = id;
    }

    public String getNames() {
        return this.names;
    }

    public String getLastNames() {
        return this.lastNames;
    }

    public int getId(){
        return this.id;
    }

    public abstract String getDescription();
    
}