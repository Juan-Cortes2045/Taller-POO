package com.Institute;


import java.util.ArrayList;
import java.util.List;

public class InstituteSystem{
  private List<Student> students;

  public InstituteSystem () {
    this.students = new ArrayList<>();

  }
    public void addStudent(Student student) {
        students.add(student);
        System.out.println("STUDENT ADDED");

    }

    public void studentInfo(Student student){
        System.out.println("Student Information:");
        System.out.println( student.getDescription());
        System.out.println("Plan selected: " +student.getPlan().getName());
        System.out.println("Licence fot: "+student.getPlan().getServices());
        System.out.println("Monthly Price: $" + student.getPlan().getPrice());
        System.out.println("Duration:"+student.getPlan().getDuration()+ " months");
        System.out.println("Total Price: $"+student.getPlan().getTotalPrice());
        System.out.println();

    }

    public static void main(String[]args){
       Plan planA= new Plan("Plan A", 50000,2, "Motorcycles");
       Plan planB= new Plan("Plan B", 100000,3, "Private Vehicles");
       Plan planC= new Plan("Plan C", 150000,6, "Public service Vehicles");

       InstituteSystem instituteSystem= new InstituteSystem();

       Student student1= new Student("Juan Esteban", "Pérez Collazos", 123456, "Cra 8 #27",67864356, "O+",planA);
       Student student2= new Student("Maria", "Parra Valenzuela", 214873, "Cra 9 #6", 6784560,"A-", planB);
       Student student3= new Student("Juan Camilo","Lozano Silva", 123475,"Cr 15 #2", 6547398,"O+", planC);
        instituteSystem.addStudent(student1);
        instituteSystem.studentInfo(student1);
        
        instituteSystem.addStudent(student2);
        instituteSystem.studentInfo(student2);
        
        instituteSystem.addStudent(student3);
        instituteSystem.studentInfo(student3);
    }
        

    
}