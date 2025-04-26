/**
 *
 * @author JUAN
 */

package com.Ruster;

public class Health {
    private double calculateHealth;

    public Health(double salary) {
        this.calculateHealth = salary * 0.12; // 12%
    }

    public double getCalculateHealth() {
        return this.calculateHealth;
    }
}

