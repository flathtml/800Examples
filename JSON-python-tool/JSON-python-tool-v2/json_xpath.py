import json
import csv
import os

def parse_json_to_csv(json_file_path, csv_file_path):
    def traverse(obj, path, parent, rows, seen_arrays):
        if isinstance(obj, dict):
            for key, value in obj.items():
                current_path = f"{path}/{key}"
                rows.append((current_path, parent if parent else "Root"))
                traverse(value, current_path, key, rows, seen_arrays)
        elif isinstance(obj, list):
            # Only add parent array path once
            if path not in seen_arrays:
                rows.append((path, parent if parent else "Root"))
                seen_arrays.add(path)

            # Only process first item to understand structure
            if obj:
                sample_item = obj[0]
                current_path = f"{path}[array]"
                traverse(sample_item, current_path, os.path.basename(path), rows, seen_arrays)

    # Load JSON
    with open(json_file_path, 'r') as json_file:
        data = json.load(json_file)

    rows = []
    seen_arrays = set()
    traverse(data, "", "", rows, seen_arrays)

    # Write CSV
    os.makedirs(os.path.dirname(csv_file_path), exist_ok=True)
    with open(csv_file_path, 'w', newline='', encoding='utf-8') as csv_file:
        writer = csv.writer(csv_file)
        writer.writerow(["XPath", "Hierarchy"])
        writer.writerows(rows)

# File paths
json_input_path = r'C:\Daya\JSON-python-tool\model.json'
csv_output_path = r'C:\Daya\JSON-python-tool\xpath\jsoninfo.csv'

# Run
parse_json_to_csv(json_input_path, csv_output_path)
print(f"CSV created at:\n{os.path.abspath(csv_output_path)}")
 
