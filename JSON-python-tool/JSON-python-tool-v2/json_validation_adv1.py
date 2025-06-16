import os
import json

# --- Configuration ---
json_file_path = r"C:\Daya\JSON-python-tool-v2\model.json"
model_package = "com.jsonvalidator.model"
output_dir = r"C:\Daya\JSON-python-tool-v2\javafilescontroller"
output_file_path = os.path.join(output_dir, "BusinessRules1.java")


def create_access_chain(obj, parent, depth=0):
    """Recursively generate Java access and check() logic."""
    lines = []
    indent = "    " * (depth + 2)

    if isinstance(obj, dict):
        for key, value in obj.items():
            getter = f"get{key[0].upper() + key[1:]}()"
            accessor = f"{parent}.{getter}"
            var = key

            if isinstance(value, list) and value and isinstance(value[0], dict):
                # Handle list of objects
                element_type = key[:-1].capitalize() if key.endswith("s") else key.capitalize()
                lines.append(f"{indent}if ({accessor} != null) {{")
                lines.append(f"{indent}    for ({element_type} {var} : {accessor}) {{")
                lines += create_access_chain(value[0], var, depth + 2)
                lines.append(f"{indent}    }}")
                lines.append(f"{indent}}} else {{")
                lines.append(f'{indent}    errors.add("{key} is missing in {parent}");')
                lines.append(f"{indent}}}")

            elif isinstance(value, dict):
                # Handle nested object
                sub_var = key
                type_name = key[0].upper() + key[1:]
                lines.append(f"{indent}if ({accessor} != null) {{")
                lines.append(f"{indent}    {type_name} {sub_var} = {accessor};")
                lines += create_access_chain(value, sub_var, depth + 1)
                lines.append(f"{indent}}} else {{")
                lines.append(f'{indent}    errors.add("{key} is missing in {parent}");')
                lines.append(f"{indent}}}")

            else:
                # Primitive field
                lines.append(f'{indent}check({accessor}, "{key}", "{parent}", errors);')

    return lines


# --- Main Execution ---
def main():
    if not os.path.exists(json_file_path):
        print(f"❌ File not found: {json_file_path}")
        return

    with open(json_file_path, "r") as file:
        json_data = json.load(file)

    policy_obj = json_data.get("policy", {})
    if not isinstance(policy_obj, dict):
        print("❌ 'policy' key not found or not an object in JSON")
        return

    access_lines = create_access_chain(policy_obj, "policy", depth=1)
    access_code = "\n".join(access_lines)

    java_code = f"""package com.jsonvalidator.controller;

import {model_package}.*;
import java.util.ArrayList;
import java.util.List;
import java.util.Objects;

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

    private static <T> void check(T field, String fieldName, String parent, List<String> errors) {{
        if (Objects.isNull(field)) {{
            errors.add(fieldName + " is blank in " + parent);
        }}
    }}
}}
"""

    os.makedirs(output_dir, exist_ok=True)
    with open(output_file_path, "w") as f:
        f.write(java_code)

    print(f"✅ Java file generated at: {output_file_path}")


if __name__ == "__main__":
    main()
