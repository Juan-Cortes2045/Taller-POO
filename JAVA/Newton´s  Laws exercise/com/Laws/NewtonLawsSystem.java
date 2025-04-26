package com.Laws;



import java.util.ArrayList;
import java.util.List;

public class NewtonLawsSystem {
    private List<Laws> laws;

    public NewtonLawsSystem() {
        this.laws = new ArrayList<>();
    }

    public void addLaw(Laws law) {
        this.laws.add(law);
    }
    
    public void showLaws() {
        int numLaws = this.laws.size();
    
        for (int iteration = 0; iteration < numLaws; iteration++) {
            Laws law = this.laws.get(iteration);

            if (law instanceof FirstLaw) {
                FirstLaw firstLaw = (FirstLaw) law;
                System.out.println("Name: " + firstLaw.getName());
                System.out.println("Explanation: " + firstLaw.getExplain());
                System.out.println("The mass of the entered object is: " + firstLaw.getObject() + "Kg");
                System.out.println("Result: " + firstLaw.getFirstLaw());
                
            }
            else if (law instanceof SecondLaw) {
                SecondLaw secondLaw = (SecondLaw) law;
                System.out.println("Name: " + secondLaw.getName());
                System.out.println("Explanation: " + secondLaw.getExplain());
                System.out.println("The mass of the entered object is: " + secondLaw.getObject() + "Kg");
                System.out.println("The acceleration of the entered object is: " + secondLaw.getAcceleration() + "m/s^2");
                System.out.println("Result: " + secondLaw.getSecondLaw() + "N");
            }
            else if (law instanceof ThirdLaw) {
                ThirdLaw thirdLaw = (ThirdLaw) law;
                System.out.println("Name: " + thirdLaw.getName());
                System.out.println("Explanation: " + thirdLaw.getExplain());
                System.out.println("The mass of the entered object is: " + thirdLaw.getObject() + "Kg");
                System.out.println("The mass of the second object is: " + thirdLaw.getMassSecondObject() + "Kg");
                System.out.println("Result: " + thirdLaw.getThirdLaw());
            }
            System.out.println("----------------------------------------");
        }
    }

    public static void main(String[] args) {
        FirstLaw firstLaw = new FirstLaw(20); 
        SecondLaw secondLaw = new SecondLaw(20, 5); 
        ThirdLaw thirdLaw = new ThirdLaw(20, 30);

        NewtonLawsSystem newtonLawsSystem = new NewtonLawsSystem();

        newtonLawsSystem.addLaw(firstLaw);
        newtonLawsSystem.addLaw(secondLaw);
        newtonLawsSystem.addLaw(thirdLaw);

        newtonLawsSystem.showLaws();
    }
}