
/**
 *
 * @author JUAN
 */
package com.Ruster;

public class Admin extends Person {
    private double nDeductible;
    private double nHealth;
    private double nPension;
    private double nARL;
    
    private float bond;

    public Admin(String name, int identification, double valueOfTheDay) {
        super(name, identification, valueOfTheDay, null);
        this.nDeductible= new Deductible(this.getSalary()).getCalculateDeductible();
        this.nHealth= new Health(this.getSalary()).getCalculateHealth();
        this.nPension= new Pension(this.getSalary()).getCalculatePension();
        this.nARL= new ARL(this.getSalary()).getCalculateARL();
     
        
      
    }
    public double getNDeductible(){
        return this.nDeductible;
    }
    public double getNHealth(){
        return this.nHealth;
    }
    public double getNPension(){
        return this.nPension;
    }   
    public double getNARL(){
        return this.nARL;
    }

   

    public String getDescription() {
        return "Name: " + this.getName() + " - ID: " + this.getIdentification();
    }

    public double getNetSalary() {
        return (this.getSalary() + this.getSubTransport()) - this.getNDeductible();
    }
}
