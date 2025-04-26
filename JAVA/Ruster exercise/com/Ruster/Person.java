

/**
 *
 * @author JUAN
 */
package com.Ruster;

public abstract class Person {
    private static final int DefaultDaysWorked= 30;
    
    private String name;
    private int identification;
    private double valueOfTheDay;
    private int daysWorked;
    private double salary;
    private double subTransport;
    
    public Person(String name, int identification, double valueOfTheDay, Integer daysWorked){
        this.name= name;
        this.identification= identification;
        this.daysWorked= (daysWorked!=null) ?daysWorked : DefaultDaysWorked;
        this.valueOfTheDay= valueOfTheDay;
        this.salary= this.daysWorked * this.valueOfTheDay;
        this.subTransport= (this.salary<2000000) ?114000 :0;
        
            }
    public String getName(){
        return this.name;
        
    }
    
    public int getIdentification(){
        return this.identification;
    }
    
    public int getdaysWorked(){
        return this.daysWorked;
    }
    
    public double getValueOfTheDay(){
        return this.valueOfTheDay;
    }
    
    public double getSalary(){
        return this.salary;
    }
    
    public double getSubTransport(){
        return this.subTransport;
    }
    public abstract String getDescription();
    public abstract double getNetSalary();
    


}

  
