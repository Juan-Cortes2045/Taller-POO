
/**
 *
 * @author JUAN
 */

package com.Ruster;

public class Ruster {
    private Coach coach;
    private Supervisor supervisor;
    private Admin admin;

    public Ruster(){
        this.coach= new Coach("Juan", 123456, 60000, 30);
        this.supervisor= new Supervisor("Andres", 2345789, 100000, 8);
        this.admin= new Admin("Maria", 3294797, 150000);
        
        showRuster();
        
    }
    public void showRuster(){
        System.out.println("La información del Coach es:"+this.coach.getDescription());
        System.out.println("El salario Neto es:" +this.coach.getNetSalary());
        System.out.println("El bono total es:" +this.coach.getBond());
        System.out.println("La cantidad de clientes: "+this.coach.getNumberClients());
        System.out.println("Total de descuentos:"+this.coach.getNDeductible());
        System.out.println("La salud equivale a:"+this.coach.getNHealth());
        System.out.println("La pension equivale a:"+this.coach.getNPension());
        System.out.println("El ARL equivale a:"+this.coach.getNARL());
        System.out.println();
        
        System.out.println("La información del Supervisor es:"+this.supervisor.getDescription());
        System.out.println("El salario Neto es:" +this.supervisor.getNetSalary());
        System.out.println("El bono total es:" +this.supervisor.getBond());
        System.out.println("La cantidad de clientes: "+this.supervisor.getNumberCoach());
        System.out.println("Total de descuentos:"+this.supervisor.getNDeductible());
        System.out.println("La salud equivale a:"+this.supervisor.getNHealth());
        System.out.println("La pension equivale a:"+this.supervisor.getNPension());
        System.out.println("El ARL equivale a:"+this.supervisor.getNARL());
        System.out.println();
        
        System.out.println("La información del Administrador es:"+this.admin.getDescription());
        System.out.println("El salario Neto es:" +this.admin.getNetSalary());
        System.out.println("Total de descuentos:"+this.admin.getNDeductible());
        System.out.println("La salud equivale a:"+this.admin.getNHealth());
        System.out.println("La pension equivale a:"+this.admin.getNPension());
        System.out.println("El ARL equivale a:"+this.admin.getNARL());
    }
     public static void main (String[] args) {
        new Ruster();
    }
}


