
/**
 *
 * @author JUAN
 */
package com.Ruster;

public class Deductible {
    private double calculateDeductible;
    private ARL arl;
    private Health health;
    private Pension pension;
    
    public Deductible(double salary){
        arl= new ARL(salary);
        health= new Health(salary);
        pension= new Pension(salary);
        
        this.calculateDeductible= arl.getCalculateARL() + health.getCalculateHealth() + pension.getCalculatePension();
    }
    public double getCalculateDeductible(){
        return this.calculateDeductible;
    }



}
