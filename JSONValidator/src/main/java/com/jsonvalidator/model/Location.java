package com.jsonvalidator.model;

import java.util.List;

// Represents each insured location under the policy
public class Location {
    private int locationNumber;
    private String address;
    private List<Building> buildings;
    private List<LocationCoverage> locationCoverages;

    public int getLocationNumber() {
        return locationNumber;
    }
    public void setLocationNumber(int locationNumber) {
        this.locationNumber = locationNumber;
    }

    public String getAddress() {
        return address;
    }
    public void setAddress(String address) {
        this.address = address;
    }

    public List<Building> getBuildings() {
        return buildings;
    }
    public void setBuildings(List<Building> buildings) {
        this.buildings = buildings;
    }

    public List<LocationCoverage> getLocationCoverages() {
        return locationCoverages;
    }
    public void setLocationCoverages(List<LocationCoverage> locationCoverages) {
        this.locationCoverages = locationCoverages;
    }
}
