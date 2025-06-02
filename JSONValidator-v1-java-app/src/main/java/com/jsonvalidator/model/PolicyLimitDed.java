package com.jsonvalidator.model;

// Represents the overall policy limit and deductible
public class PolicyLimitDed {
    private int totalLimit;
    private int totalDeductible;

    public int getTotalLimit() {
        return totalLimit;
    }
    public void setTotalLimit(int totalLimit) {
        this.totalLimit = totalLimit;
    }

    public int getTotalDeductible() {
        return totalDeductible;
    }
    public void setTotalDeductible(int totalDeductible) {
        this.totalDeductible = totalDeductible;
    }
}
