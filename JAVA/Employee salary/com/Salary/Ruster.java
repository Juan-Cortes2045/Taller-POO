package com.Salary;

public class Ruster{
    private Employee employee;        
    
    public void showData(Employee employee){
        

        System.out.println("Los datos del empleado son: " +employee.getDescription());
        System.out.println("El salario es: " + employee.getSalary());
        System.out.println("El subsidio es de: " + employee.getSubsidy());
        System.out.println("La cantidad de dias trabajados son: " + employee.getDaysWorked());
        System.out.println("La cantidad de horas normales trabajadas es: " + employee.getNormalHours());
        System.out.println("La cantidad de horas extras diurnas trabajadas es: " + employee.getDaytimeOvertime());
        System.out.println("La cantidad de horas extras nocturnas trabajadas es: " + employee.getNightimeOvertime());
        System.out.println("La cantidad de horas extras de festivos es: " + employee.getHolidaysOvertime());
        System.out.println("El salario neto es: " +employee.getNetSalary());
        System.out.println("Nivel de riesgo: "+employee.getNLevelRisk());
        employee.getNDiscounts().show(); 
    }
    public static void main(String[]args){
        Employee nEmployee= new Employee("Juan", "Cortes", 17, 122342374, 3000000, "alto");
        Ruster ruster=new Ruster();
        ruster.showData(nEmployee);
    }
}