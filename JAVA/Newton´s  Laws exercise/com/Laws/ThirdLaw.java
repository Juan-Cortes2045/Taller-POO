package com.Laws;

public class ThirdLaw extends Laws {
    
    private String calculate;
    private String name;
    private int massSecondObject;

    public ThirdLaw(int object, int massSecondObject) {
        super(object);
        this.calculate = "";
        this.name = "Third Law"; 
        this.massSecondObject = massSecondObject;
        
    }
    public String getName() {
        return this.name;
    }

    public int getMassSecondObject() {
        return this.massSecondObject;
    }

    public String getThirdLaw() {
        this.calculate = (this.getObject() == this.getMassSecondObject()) 
            ? "The object is pushed backward by another object with the same mass (action) and this in turn moves forward (reaction)."
            : "The object is pushed backward by another object (action) and this in turn moves forward (reaction). They both have different masses";
        return this.calculate;
    }

    @Override
    public String getExplain() {
        return "Every action has an equal and opposite reaction.";
    }

  
}