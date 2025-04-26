
/**
 *
 * @author JUAN
 */
package com.Ruster;

public class ARL {
    private double calculateARL;

    public ARL(double salary) {
        this.calculateARL = salary * 0.052; // 5.2%
    }

    public double getCalculateARL() {
        return this.calculateARL;
    }
}



  
