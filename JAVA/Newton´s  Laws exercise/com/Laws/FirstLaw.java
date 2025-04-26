package com.Laws;

public class FirstLaw extends Laws {
    
    private String calculate;
    private String name;

    public FirstLaw(int object) {
        super(object);
        this.calculate = "";
        this.name = "First Law";
    }

    public String getName() {
        return this.name;
    }

    public String getFirstLaw() {
        this.calculate = (this.getObject() == 0)
            ? "The object maintains its state:" 
            : "The object is being affected by an external force";
        return this.calculate;
    }

    @Override
    public String getExplain() {
        return "Every body remains in its state of rest or uniform rectilinear motion unless acted upon by an external force.";
    }


}