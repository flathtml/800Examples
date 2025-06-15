import os
import json

# --- Configuration ---
json_file_path = r"C:\Daya\JSON-python-tool\model.json"
model_package = "com.jsonvalidator.model"
output_dir = r"C:\Daya\JSON-python-tool\javafilescontroller"
output_file_path = os.path.join(output_dir, "BusinessRules.java")

# --- Helper: Recursively generate Java access code and null checks ---
def create_access_chain(obj, parent, depth=0):
    lines = []
    indent = "    " * (depth + 2)
    if isinstance(obj, dict):
        for key, value in obj.items():
            getter = f"get{key[0].upper() + key[1:]}()"
            accessor = f"{parent}.{getter}"
            var = key
            if isinstance(value, list) and value and isinstance(value[0], dict):
                element_type = key[:-1].capitalize() if key.endswith("s") else key.capitalize()
                lines.append(f"{indent}if ({accessor} != null) {{")
                lines.append(f"{indent}    for ({element_type} {var} : {accessor}) {{")
                lines += create_access_chain(value[0], var, depth + 2)
                lines.append(f"{indent}    }}")
                lines.append(f"{indent}}} else {{")
                lines.append(f'{indent}    errors.add("{key} is missing in {parent}");')
                lines.append(f"{indent}}}")
            elif isinstance(value, dict):
                sub_var = key
                type_name = key[0].upper() + key[1:]
                lines.append(f"{indent}if ({accessor} != null) {{")
                lines.append(f"{indent}    {type_name} {sub_var} = {accessor};")
                lines += create_access_chain(value, sub_var, depth + 1)
                lines.append(f"{indent}}} else {{")
                lines.append(f'{indent}    errors.add("{key} is missing in {parent}");')
                lines.append(f"{indent}}}")
            else:
                lines.append(f"{indent}if ({accessor} == null) {{")
                lines.append(f'{indent}    errors.add("{key} is blank in {parent}");')
                lines.append(f"{indent}}}")
    return lines

# --- Parse JSON and generate access lines ---
with open(json_file_path, "r") as file:
    json_data = json.load(file)

policy_obj = json_data.get("policy", {})
access_lines = create_access_chain(policy_obj, "policy", depth=1)
access_code = "\n".join(access_lines)

# --- Compose Java class ---
java_code = f"""package com.jsonvalidator.controller;

import {model_package}.*;
import java.util.ArrayList;
import java.util.List;

public class BusinessRules {{
    public static List<String> validate(Policy policy) {{
        List<String> errors = new ArrayList<>();
        if (policy == null) {{
            errors.add("Policy is null.");
            return errors;
        }}

{access_code}

        return errors;
    }}
}}
"""

# --- Write to file ---
os.makedirs(output_dir, exist_ok=True)
with open(output_file_path, "w") as f:
    f.write(java_code)

print("Java files successfully generated.")
 