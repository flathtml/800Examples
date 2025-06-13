package com.jsonvalidator.util;

public class ErrorMessages {
    public static final String POLICY_OR_LOCATIONS_MISSING = "Policy or Locations data is missing.";
    public static final String DEDUCTIBLE_TOO_LOW =
        "Location %d - Coverage '%s': Deductible cannot be less than %d (found %d).";
    public static final String DEDUCTIBLE_TOO_LOW_FOR_BUILDING_VALUE =
        "Location %d - Coverage '%s': Deductible must be at least %d when total building value exceeds %d (found %d).";
}
