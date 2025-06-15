package com.jsonvalidator.controller;

import com.jsonvalidator.model.*;
import java.util.ArrayList;
import java.util.List;

public class BusinessRules {
    public static List<String> validate(Policy policy) {
        List<String> errors = new ArrayList<>();
        if (policy == null) {
            errors.add("Policy is null.");
            return errors;
        }

            if (policy.getPolicyNumber() == null) {
                errors.add("policyNumber is blank in policy");
            }
            if (policy.getEffectiveDate() == null) {
                errors.add("effectiveDate is blank in policy");
            }
            if (policy.getExpirationDate() == null) {
                errors.add("expirationDate is blank in policy");
            }
            if (policy.getInsuredInfo() != null) {
                InsuredInfo insuredInfo = policy.getInsuredInfo();
                if (insuredInfo.getInsuredName() == null) {
                    errors.add("insuredName is blank in insuredInfo");
                }
                if (insuredInfo.getInsuredAddress() == null) {
                    errors.add("insuredAddress is blank in insuredInfo");
                }
                if (insuredInfo.getContactNumber() == null) {
                    errors.add("contactNumber is blank in insuredInfo");
                }
                if (insuredInfo.getEmail() == null) {
                    errors.add("email is blank in insuredInfo");
                }
            } else {
                errors.add("insuredInfo is missing in policy");
            }
            if (policy.getPolicyLimitDed() != null) {
                PolicyLimitDed policyLimitDed = policy.getPolicyLimitDed();
                if (policyLimitDed.getTotalLimit() == null) {
                    errors.add("totalLimit is blank in policyLimitDed");
                }
                if (policyLimitDed.getTotalDeductible() == null) {
                    errors.add("totalDeductible is blank in policyLimitDed");
                }
            } else {
                errors.add("policyLimitDed is missing in policy");
            }
            if (policy.getPolicyCoverages() != null) {
                for (Policycoverage policyCoverages : policy.getPolicyCoverages()) {
                    if (policyCoverages.getCoverageType() == null) {
                        errors.add("coverageType is blank in policyCoverages");
                    }
                    if (policyCoverages.getLimit() == null) {
                        errors.add("limit is blank in policyCoverages");
                    }
                    if (policyCoverages.getDeductible() == null) {
                        errors.add("deductible is blank in policyCoverages");
                    }
                }
            } else {
                errors.add("policyCoverages is missing in policy");
            }
            if (policy.getLocations() != null) {
                for (Location locations : policy.getLocations()) {
                    if (locations.getLocationNumber() == null) {
                        errors.add("locationNumber is blank in locations");
                    }
                    if (locations.getAddress() == null) {
                        errors.add("address is blank in locations");
                    }
                    if (locations.getBuildings() != null) {
                        for (Building buildings : locations.getBuildings()) {
                            if (buildings.getBuildingNumber() == null) {
                                errors.add("buildingNumber is blank in buildings");
                            }
                            if (buildings.getBuildingDescription() == null) {
                                errors.add("buildingDescription is blank in buildings");
                            }
                            if (buildings.getBuildingValue() == null) {
                                errors.add("buildingValue is blank in buildings");
                            }
                        }
                    } else {
                        errors.add("buildings is missing in locations");
                    }
                    if (locations.getLocationCoverages() != null) {
                        for (Locationcoverage locationCoverages : locations.getLocationCoverages()) {
                            if (locationCoverages.getCoverageType() == null) {
                                errors.add("coverageType is blank in locationCoverages");
                            }
                            if (locationCoverages.getLimit() == null) {
                                errors.add("limit is blank in locationCoverages");
                            }
                            if (locationCoverages.getDeductible() == null) {
                                errors.add("deductible is blank in locationCoverages");
                            }
                        }
                    } else {
                        errors.add("locationCoverages is missing in locations");
                    }
                }
            } else {
                errors.add("locations is missing in policy");
            }

        return errors;
    }
}
