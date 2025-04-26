/**
 *
 * @author JUAN
 */

package com.Ruster;

public class Pension {
    private double calculatePension;

    public Pension(double salary) {
        this.calculatePension = salary * 0.04; // 4%
    }

    public double getCalculatePension() {
        return this.calculatePension;
    }
}


