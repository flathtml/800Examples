import json
import os

JAVA_TYPES = {
    str: "String",
    int: "int",
    float: "double",
    bool: "boolean",
    type(None): "Object"
}

def to_camel_case(snake_str):
    parts = snake_str.split('_')
    return parts[0] + ''.join(word.capitalize() for word in parts[1:])

def capitalize(s):
    return s[0].upper() + s[1:] if s else s

def infer_type(key, value):
    if isinstance(value, list):
        if value and isinstance(value[0], dict):
            return f"List<{capitalize(key)}Item>"
        elif value:
            return f"List<{JAVA_TYPES.get(type(value[0]), 'Object')}>"
        else:
            return "List<Object>"
    elif isinstance(value, dict):
        return capitalize(key)
    else:
        return JAVA_TYPES.get(type(value), "Object")

def write_class_file(class_name, fields, output_dir):
    filename = os.path.join(output_dir, f"{class_name}.java")
    with open(filename, 'w') as f:
        f.write("import java.util.List;\n\n")
        f.write(f"public class {class_name} {{\n")

        for field_type, field_name in fields:
            f.write(f"    private {field_type} {field_name};\n")
        f.write("\n")

        for field_type, field_name in fields:
            method_suffix = capitalize(field_name)
            f.write(f"    public {field_type} get{method_suffix}() {{ return {field_name}; }}\n")
            f.write(f"    public void set{method_suffix}({field_type} {field_name}) {{ this.{field_name} = {field_name}; }}\n\n")

        f.write("}\n")

def process_object(name, obj, output_dir, processed_classes):
    class_name = capitalize(name)
    fields = []

    for key, value in obj.items():
        field_name = to_camel_case(key)
        field_type = infer_type(key, value)
        fields.append((field_type, field_name))

        if isinstance(value, dict):
            process_object(key, value, output_dir, processed_classes)
        elif isinstance(value, list) and value and isinstance(value[0], dict):
            process_object(f"{key}Item", value[0], output_dir, processed_classes)

    if class_name not in processed_classes:
        write_class_file(class_name, fields, output_dir)
        processed_classes.add(class_name)

def generate_java_models(json_file, output_dir):
    os.makedirs(output_dir, exist_ok=True)
    with open(json_file, 'r') as f:
        data = json.load(f)

    processed_classes = set()
    root_name = "Root"
    if isinstance(data, dict) and len(data) == 1:
        root_name = list(data.keys())[0]
        data = data[root_name]

    process_object(root_name, data, output_dir, processed_classes)
    print("Java files successfully generated")  # ✅ Success message

# ---------- MAIN ----------
if __name__ == "__main__":
    full_json_path = r"C:\Daya\JSON-python-tool\model.json"
    output_java_path = r"C:\Daya\JSON-python-tool\javafilesmodel"

    generate_java_models(full_json_path, output_java_path)
 