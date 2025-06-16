import json
import csv
import os

# Input/Output paths
json_path = r"C:\Daya\JSON-python-tool-v2\model.json"
output_csv_path = r"C:\Daya\JSON-python-tool-v2\xpath\jsoninfo.csv"

# Helper function to recursively extract paths
def extract_paths(obj, current_path="", results=None):
    if results is None:
        results = []

    if isinstance(obj, dict):
        for key, value in obj.items():
            new_path = f"{current_path}/{key}" if current_path else key
            extract_paths(value, new_path, results)
    elif isinstance(obj, list):
        for item in obj:
            # Don't add the array itself, just the subfields
            extract_paths(item, current_path, results)
    else:
        results.append(current_path)

    return results

# Load JSON
with open(json_path, 'r') as f:
    json_data = json.load(f)

# Extract paths
all_paths = extract_paths(json_data)

# Remove duplicates and sort
unique_paths = sorted(set(all_paths))

# Write to CSV
with open(output_csv_path, 'w', newline='') as f:
    writer = csv.writer(f)
    writer.writerow(['xPath'])  # CSV header
    for path in unique_paths:
        writer.writerow([path])

print(f"CSV generated with {len(unique_paths)} paths at {output_csv_path}")

 
 