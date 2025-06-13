package com.jsonvalidator.controller;

import com.jsonvalidator.model.*;
import com.jsonvalidator.util.*;
import java.util.ArrayList;
import java.util.List;
import java.util.function.BiPredicate;

public class BusinessRules {

    private static final int MIN_DEDUCTIBLE = 1000;
    private static final int MIN_DEDUCTIBLE_HIGH_VALUE = 2000;
    private static final int HIGH_BUILDING_VALUE_THRESHOLD = 5000;

    public static List<String> validate(Policy policy) {
        List<String> errors = new ArrayList<>();

        if (policy == null || policy.getLocations() == null) {
            errors.add(ErrorMessages.POLICY_OR_LOCATIONS_MISSING);
            return errors;
        }

        for (Location location : policy.getLocations()) {
            final double totalBuildingValue = calculateTotalBuildingValue(location);

            if (location.getLocationCoverages() != null) {
                for (LocationCoverage locCov : location.getLocationCoverages()) {
                    int deductible = locCov.getDeductible();

                    // Predicate #1: Deductible must be >= 1000
                    BiPredicate<Integer, Double> minDeductiblePredicate = (ded, val) -> ded < MIN_DEDUCTIBLE;
                    if (minDeductiblePredicate.test(deductible, totalBuildingValue)) {
                        errors.add(String.format(
                            ErrorMessages.DEDUCTIBLE_TOO_LOW,
                            location.getLocationNumber(),
                            locCov.getCoverageType(),
                            MIN_DEDUCTIBLE,
                            deductible));
                    }

                    // Predicate #2: If total building value > threshold, deductible must be >= 2000
                    BiPredicate<Integer, Double> highValueDeductiblePredicate =
                        (ded, val) -> val > HIGH_BUILDING_VALUE_THRESHOLD && ded < MIN_DEDUCTIBLE_HIGH_VALUE;
                    if (highValueDeductiblePredicate.test(deductible, totalBuildingValue)) {
                        errors.add(String.format(
                            ErrorMessages.DEDUCTIBLE_TOO_LOW_FOR_BUILDING_VALUE,
                            location.getLocationNumber(),
                            locCov.getCoverageType(),
                            MIN_DEDUCTIBLE_HIGH_VALUE,
                            HIGH_BUILDING_VALUE_THRESHOLD,
                            deductible));
                    }
                }
            }
        }

        return errors;
    }

    private static double calculateTotalBuildingValue(Location location) {
        double total = 0;
        if (location.getBuildings() != null) {
            for (Building b : location.getBuildings()) {
                total += b.getBuildingValue();
            }
        }
        return total;
    }
}
