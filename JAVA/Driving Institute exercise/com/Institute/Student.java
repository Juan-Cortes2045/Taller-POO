package com.Institute;

public class Student extends Person {
  
    private Plan plan;
    private String description;
    

    public Student(String names, String lastNames, int id, String residenseAddress, int phoneNumber, String rh, Plan plan) {
        super(names, lastNames, id, residenseAddress, phoneNumber, rh);
        this.plan=plan;
        this.description=description;
        
    }




    public Plan getPlan() {
        return this.plan;
    }

    @Override
    public String getDescription() {
         this.description = "Name: " + getNames() + " " + getLastNames() + "\n" +
                         "ID: " + getId() + "\n" +
                         "Address: " + getResidenceAddress() + "\n" +
                         "Phone Number: " + getPhoneNumber() + "\n" +
                         "RH: " + getRh();
    
       
        return description;
}  
    
}