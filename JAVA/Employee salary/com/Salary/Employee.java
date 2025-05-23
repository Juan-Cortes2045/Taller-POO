package com.Salary;


public class Employee extends Person {
    private double salary;
    private double subsidy;
    private int minimumWage;
    private int daysWorked;
    private int normalHours;
    private int daytimeOvertime;
    private int nightimeOvertime;
    private int holidaysOvertime;
    private String nlevelRisk;
    private Discounts nDiscounts; 

    

    
    


    public  Employee(String name, String lastname, int age, int identification, double salary, String nlevelRisk) {
        super(name, lastname, age, identification);
        this.minimumWage= 1400000;
        this.salary = salary;
        this.subsidy = (salary < (this.minimumWage*2)) ? this.minimumWage    : 0;
        this.daysWorked = 26;
        this.normalHours = this.daysWorked * 8;
        this.daytimeOvertime = 15;
        this.nightimeOvertime = 10;
        this.holidaysOvertime = 8;
        this.nlevelRisk = nlevelRisk;
        this.nDiscounts = new Discounts(this, new String[] {nlevelRisk});
       
        
        

    }

    public int getMinimumWage() {
        return this.minimumWage;
    }   

    public double getSalary(){
        return this.salary;
    }
 

    public double getSubsidy(){
        return this.subsidy;
    }
    
    public int getDaysWorked(){
        return this.daysWorked;
    }

    public int getNormalHours(){
        return this.normalHours;
    }

    public int getDaytimeOvertime(){
        return this.daytimeOvertime;
    }

    public int getNightimeOvertime(){
        return this.nightimeOvertime;
    }   

    public int getHolidaysOvertime(){
        return this.holidaysOvertime;
    }

    public String getNLevelRisk(){
        return this.nlevelRisk;
    }

    public Discounts getNDiscounts(){
        return this.nDiscounts;
    }
    @Override
    public double getNetSalary(){
        return (this.getSalary() + this.getSubsidy() + this.nDiscounts.getExtras()) - this.nDiscounts.getTotalDiscounts();
        
    }
    @Override
    public String getDescription(){
        return "Nombre: "+this.getName()+", Apellido: "+this.getLastname()+", Edad: "+this.getAge()+", Identificacion: "+this.getIdentification();
    }
   
    
    
   
    
}
