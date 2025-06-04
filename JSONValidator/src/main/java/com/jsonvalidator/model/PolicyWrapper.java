package com.jsonvalidator.model;

// Root wrapper class to match the top-level "policy" field in JSON
public class PolicyWrapper {
    private Policy policy;

    public Policy getPolicy() {
        return policy;
    }
    public void setPolicy(Policy policy) {
        this.policy = policy;
    }
}
