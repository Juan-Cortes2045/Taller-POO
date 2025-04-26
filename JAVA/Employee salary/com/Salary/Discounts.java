package com.Salary;


public class Discounts  {
    private double calculateARL;
    private double ARL;
    private Employee employee;
    private String[] levelRisk;
    private double pension;
    private double health;
    private double totalDiscounts;
    private double cDaytimeOvertime;
    private double cNightimeOvertime;
    private double cHolidaysOvertime;
    private double extras;
    private double hourlyRate;
    
    
   

    public Discounts(Employee employee, String[] levelRisk) {
        
        this.levelRisk=levelRisk;
        this.ARL = getCalculateARL(employee);
        this.employee = employee;
        this.pension = employee.getSalary() * 0.04;
        this.health = employee.getSalary() * 0.04;
        this.hourlyRate = employee.getSalary() / (employee.getDaysWorked()*8);
        this.cDaytimeOvertime = this.hourlyRate * 1.25 * employee.getDaytimeOvertime();
        this.cNightimeOvertime = this.hourlyRate * 1.75 * employee.getNightimeOvertime();
        this.cHolidaysOvertime = this.hourlyRate * 2 * employee.getHolidaysOvertime();
        this.totalDiscounts = this.ARL + this.pension + this.health;
        this.extras = this.cDaytimeOvertime + this.cNightimeOvertime + this.cHolidaysOvertime;
        
        
    }

    public double getCalculateARL(Employee employee){
        int numLevelRisk= this.levelRisk.length;

        for(int iteration=0; iteration < numLevelRisk; iteration++){
            String nlevelRisk=this.levelRisk[iteration];

           if(nlevelRisk.equalsIgnoreCase("minimo")){
               return employee.getSalary()* 0.00522;
           }

           else if(nlevelRisk.equalsIgnoreCase("bajo")){
                return employee.getSalary()* 0.01024;

           }

           else if(nlevelRisk.equalsIgnoreCase("medio")){
                return employee.getSalary()* 0.02436;

           }

           else if(nlevelRisk.equalsIgnoreCase("alto")){
                return employee.getSalary()*0.0435;
           }
        }
        return 0;
        
    }


    public double getARL(){
        return this.ARL;
    }

    public double getPension(){
        return this.pension;
    }

    public double getHealth(){
        return this.health;
    }
    public double getHourlyRate(){
        return this.hourlyRate;
    }


    public double getTotalDiscounts(){
        return this.totalDiscounts;
    }

    public double getCDaytimeOvertime() {
        return this.cDaytimeOvertime;
    }

    public double getCNightimeOvertime() {
        return this.cNightimeOvertime;
    }

    public double getCHolidaysOvertime() {
        return this.cHolidaysOvertime;
    }

    public double getExtras() {
        return this.extras;
    }

    public void show(){
        System.out.println("El pago por hora es de:" + this.getHourlyRate());
        System.out.println("El ARL equivale a: "+this.getARL());
        System.out.println("La pension equivale a: "+this.getPension());
        System.out.println("La salud equivale a: "+this.getHealth());
        System.out.println("El total de descuentos equivale a: "+this.getTotalDiscounts());
        System.out.println("El total de dinero generado en las horas extras diurnas equivale a: "+this.getCDaytimeOvertime());
        System.out.println("El total de dinero generado en las horas extras nocturnas equivale a: "+this.getCNightimeOvertime());
        System.out.println("El total de dinero generado en las horas extras festivas equivale a: "+this.getCHolidaysOvertime());
        System.out.println("El total de dinero generado en las horas extras equivale a: "+this.getExtras());
    }

}