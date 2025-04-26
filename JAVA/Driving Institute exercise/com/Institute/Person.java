package com.Institute;


public abstract class Person{
    private String names;
    private String lastNames;
    private int id;
    private String residenceAddress;
    private int phoneNumber;
    private String rh;

    public Person(String names, String lastNames, int id, String residenseAddress, int phoneNumber, String rh) {
        this.names = names;
        this.lastNames = lastNames;
        this.id = id;
        this.residenceAddress= residenseAddress;
        this.phoneNumber= phoneNumber;
        this.rh=rh;
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

    public String getResidenceAddress(){
        return this.residenceAddress;
    }

    public int getPhoneNumber(){
        return this.phoneNumber;
    }

    public String getRh(){
        return this.rh;
    }

    public abstract String getDescription();
    
}