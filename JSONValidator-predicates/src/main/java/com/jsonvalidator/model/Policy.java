package com.jsonvalidator.model;

import java.util.List;

// Represents the policy details inside the "policy" object
public class Policy {
    private String policyNumber;
    private String effectiveDate;
    private String expirationDate;
    private InsuredInfo insuredInfo;
    private PolicyLimitDed policyLimitDed;
    private List<PolicyCoverage> policyCoverages;
    private List<Location> locations;

    public String getPolicyNumber() {
        return policyNumber;
    }
    public void setPolicyNumber(String policyNumber) {
        this.policyNumber = policyNumber;
    }

    public String getEffectiveDate() {
        return effectiveDate;
    }
    public void setEffectiveDate(String effectiveDate) {
        this.effectiveDate = effectiveDate;
    }

    public String getExpirationDate() {
        return expirationDate;
    }
    public void setExpirationDate(String expirationDate) {
        this.expirationDate = expirationDate;
    }

    public InsuredInfo getInsuredInfo() {
        return insuredInfo;
    }
    public void setInsuredInfo(InsuredInfo insuredInfo) {
        this.insuredInfo = insuredInfo;
    }

    public PolicyLimitDed getPolicyLimitDed() {
        return policyLimitDed;
    }
    public void setPolicyLimitDed(PolicyLimitDed policyLimitDed) {
        this.policyLimitDed = policyLimitDed;
    }

    public List<PolicyCoverage> getPolicyCoverages() {
        return policyCoverages;
    }
    public void setPolicyCoverages(List<PolicyCoverage> policyCoverages) {
        this.policyCoverages = policyCoverages;
    }

    public List<Location> getLocations() {
        return locations;
    }
    public void setLocations(List<Location> locations) {
        this.locations = locations;
    }
}
