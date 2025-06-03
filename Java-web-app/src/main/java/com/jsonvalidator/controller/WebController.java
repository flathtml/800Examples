package com.jsonvalidator.controller;

import org.springframework.beans.factory.annotation.Value;
import org.springframework.core.io.FileSystemResource;
import org.springframework.http.*;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.util.LinkedMultiValueMap;
import org.springframework.util.MultiValueMap;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.client.RestTemplate;

import java.io.File;
import java.util.*;

@Controller
public class WebController {

   // @Value("${json.folder}")
   // private String jsonFolder;
    private final String jsonFolder = "C:\\Daya\\JavaSpring\\JSONValidator\\jsonfiles";
                        

    private final String API_URL = "http://localhost:8080/api/policy/validate";

    @GetMapping("/")
    public String index(Model model) {
        System.out.println("Loaded JSON folder path from application.properties: " + jsonFolder);  // Debug

        File folder = new File(jsonFolder);
        List<String> files = new ArrayList<>();
        if (folder.exists() && folder.isDirectory()) {
            File[] jsonFiles = folder.listFiles((dir, name) -> name.endsWith(".json"));
            if (jsonFiles != null) {
                for (File file : jsonFiles) {
                    files.add(file.getName());
                }
            }
        } else {
            System.out.println("Warning: Folder not found or not a directory: " + jsonFolder);
        }

        model.addAttribute("files", files);
        return "index";
    }

    @PostMapping("/validate")
    @ResponseBody
    public Map<String, Object> validate(@RequestParam("json_file") String jsonFile) {
        Map<String, Object> result = new HashMap<>();
        try {
            File file = new File(jsonFolder, jsonFile);
            if (!file.exists()) {
                result.put("errors", List.of("File not found."));
                result.put("rows", List.of());
                return result;
            }

            FileSystemResource resource = new FileSystemResource(file);
            RestTemplate restTemplate = new RestTemplate();

            HttpHeaders headers = new HttpHeaders();
            headers.setContentType(MediaType.MULTIPART_FORM_DATA);

            MultiValueMap<String, Object> body = new LinkedMultiValueMap<>();
            body.add("file", resource);

            HttpEntity<MultiValueMap<String, Object>> requestEntity = new HttpEntity<>(body, headers);
            ResponseEntity<Map> response = restTemplate.postForEntity(API_URL, requestEntity, Map.class);

            return response.getBody();

        } catch (Exception e) {
            result.put("errors", List.of("Error: " + e.getMessage()));
            result.put("rows", List.of());
            return result;
        }
    }
}
