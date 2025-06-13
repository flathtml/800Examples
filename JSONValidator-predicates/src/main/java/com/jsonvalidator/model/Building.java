package com.jsonvalidator.model;

// Building details for each location
public class Building {
    private int buildingNumber;
    private String buildingDescription;
    private int buildingValue;

    public int getBuildingNumber() {
        return buildingNumber;
    }
    public void setBuildingNumber(int buildingNumber) {
        this.buildingNumber = buildingNumber;
    }

    public String getBuildingDescription() {
        return buildingDescription;
    }
    public void setBuildingDescription(String buildingDescription) {
        this.buildingDescription = buildingDescription;
    }

    public int getBuildingValue() {
        return buildingValue;
    }
    public void setBuildingValue(int buildingValue) {
        this.buildingValue = buildingValue;
    }
}
