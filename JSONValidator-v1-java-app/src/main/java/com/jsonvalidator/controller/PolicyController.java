 package com.jsonvalidator.controller;

import com.fasterxml.jackson.databind.ObjectMapper;
import com.jsonvalidator.model.*;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.multipart.MultipartFile;

import java.io.IOException;
import java.util.*;

@RestController
@RequestMapping("/api/policy")
public class PolicyController {

    private final ObjectMapper objectMapper = new ObjectMapper();

    @PostMapping("/validate")
    public ResponseEntity<?> validatePolicy(@RequestParam("file") MultipartFile file) {
        Map<String, Object> response = new HashMap<>();
        List<String> errors;
        List<Object> rows = new ArrayList<>();

        try {
            if (file.isEmpty()) {
                return ResponseEntity.badRequest().body("File is empty");
            }

            PolicyWrapper policyWrapper = objectMapper.readValue(file.getInputStream(), PolicyWrapper.class);

            // Call business rule validator
            errors = BusinessRules.validate(policyWrapper.getPolicy());

            if (errors.isEmpty()) {
                errors.add("All business rules passed.");
            }

            response.put("errors", errors);
            response.put("rows", rows);

            return ResponseEntity.ok(response);

        } catch (IOException e) {
            response.put("errors", List.of("Invalid JSON format: " + e.getMessage()));
            response.put("rows", new ArrayList<>());
            return ResponseEntity.status(HttpStatus.BAD_REQUEST).body(response);
        }
    }
}
