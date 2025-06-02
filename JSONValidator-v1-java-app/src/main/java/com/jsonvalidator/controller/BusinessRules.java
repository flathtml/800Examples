package com.jsonvalidator.controller;

import com.jsonvalidator.model.*;

import java.util.ArrayList;
import java.util.List;

public class BusinessRules {

    public static List<String> validate(Policy policy) {
        List<String> errors = new ArrayList<>();

        if (policy == null || policy.getLocations() == null) {
            errors.add("Policy or Locations data is missing.");
            return errors;
        }

        for (Location location : policy.getLocations()) {
            double totalBuildingValue = 0;

            if (location.getBuildings() != null) {
                for (Building b : location.getBuildings()) {
                    totalBuildingValue += b.getBuildingValue();
                }
            }

            if (location.getLocationCoverages() != null) {
                for (LocationCoverage locCov : location.getLocationCoverages()) {
                    int deductible = locCov.getDeductible();

                    // Rule #1: Deductible must be at least 1000
                    if (deductible < 1000) {
                        errors.add(String.format(
                            "Location %d - Coverage '%s': Deductible cannot be less than 1000 (found %d).",
                            location.getLocationNumber(), locCov.getCoverageType(), deductible));
                    }

                    // Rule #2: If total building area > 5000, deductible must be at least 2000
                    if (totalBuildingValue > 5000 && deductible < 2000) {
                        errors.add(String.format(
                            "Location %d - Coverage '%s': Deductible must be at least 2000 when total building value exceeds 5000 (found %d).",
                            location.getLocationNumber(), locCov.getCoverageType(), deductible));
                    }
                }
            }
        }

        return errors;
    }
}
