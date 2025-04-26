
/**
 *
 * @author JUAN
 */
package com.Ruster;

public class Coach extends Person {
    private double numberClients;
    private double bond;
    private double nDeductible;
    private double nHealth;
    private double nPension;
    private double nARL;

    public Coach(String name, int identification, double valueOfTheDay, double numberClients) {
        super(name, identification, valueOfTheDay, null);
        this.numberClients = numberClients;
        this.bond = (int)(this.numberClients / 5) * 100000;
        this.nDeductible= new Deductible(this.getSalary()).getCalculateDeductible();
        this.nHealth= new Health(this.getSalary()).getCalculateHealth();
        this.nPension= new Pension(this.getSalary()).getCalculatePension();
        this.nARL= new ARL(this.getSalary()).getCalculateARL();

    }

    public double getNumberClients() {
        return this.numberClients;
    }

    public double getBond() {
        return this.bond;
    }

    public double getNHealth() {
        return this.nHealth;
    }

    public double getNPension() {
        return this.nPension;
    }

    public double getNARL() {
        return this.nARL;
    }   

   
    

    public double getNDeductible(){
        return this.nDeductible;
    }

    public String getDescription() {
        return "Name: " + this.getName() + " - ID: " + this.getIdentification();
    }

    public double getNetSalary() {
        return (this.getSalary() + this.getSubTransport() + this.getBond()) - this.getNDeductible();
    }
}
