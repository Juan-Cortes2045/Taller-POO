package com.Salary;


public abstract class Person {
    private String name;
    private String lastname;
    private int age;
    private int identification;
    

    public Person(String name, String lastname, int age, int identification) {
        this.name = name;
        this.lastname= lastname;
        this.age = age;
        this.identification = identification;   
        
    }

    public String getName() {
        return this.name;
    }

    public String getLastname() {
        return this.lastname;
    }

    public int getAge() {
        return this.age;
    }

    public int getIdentification() {
        return this.identification;
    }

    public abstract String getDescription();
    public abstract double getNetSalary();
}
