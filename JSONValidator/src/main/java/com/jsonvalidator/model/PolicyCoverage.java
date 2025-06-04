package com.jsonvalidator.model;

// Individual coverage items at the policy level
public class PolicyCoverage {
    private String coverageType;
    private int limit;
    private int deductible;

    public String getCoverageType() {
        return coverageType;
    }
    public void setCoverageType(String coverageType) {
        this.coverageType = coverageType;
    }

    public int getLimit() {
        return limit;
    }
    public void setLimit(int limit) {
        this.limit = limit;
    }

    public int getDeductible() {
        return deductible;
    }
    public void setDeductible(int deductible) {
        this.deductible = deductible;
    }
}
