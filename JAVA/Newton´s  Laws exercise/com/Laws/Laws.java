package com.Laws;

public abstract class Laws {
    private int object;

    public Laws(int object) {
        this.object = object;
    }

    public int getObject() {
        return this.object;
    }

    public abstract String getExplain();
}
