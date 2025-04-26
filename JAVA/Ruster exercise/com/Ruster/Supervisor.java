/**
 *
 * @author JUAN
 */
package com.Ruster;

public class Supervisor extends Person {
    private int numberCoach;
    private double bond;
    private double nDeductible;
    private double nHealth;
    private double nPension;
    private double nARL;
    

    public Supervisor(String name, int identification, double valueOfTheDay, int numberCoach) {
        super(name, identification, valueOfTheDay, null);
        this.numberCoach = numberCoach;
        this.bond = this.numberCoach  * 60000;
        this.nDeductible= new Deductible(this.getSalary()).getCalculateDeductible();
        this.nHealth= new Health(this.getSalary()).getCalculateHealth();
        this.nPension= new Pension(this.getSalary()).getCalculatePension();
        this.nARL= new ARL(this.getSalary()).getCalculateARL();
    }

    public int getNumberCoach() {
        return this.numberCoach;
    }

    public double getBond() {
        return this.bond;
    }

    public double getNDeductible() {
        return this.nDeductible;
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

    public String getDescription() {
        return "Name: " + this.getName() + " - ID: " + this.getIdentification();
    }

    public double getNetSalary() {
        return (this.getSalary() + this.getSubTransport() + this.getBond()) - this.getNDeductible();
    }
}
