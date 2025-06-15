from flask import Flask, render_template, request
import csv
import os
import datetime
import xml.etree.ElementTree as ET
from xml.dom import minidom

app = Flask(__name__)

# File paths
CSV_PATH = r"C:\Daya\JSON-python-tool\xpath\jsoninfo.csv"
OUTPUT_FOLDER = r"C:\Daya\JSON-python-tool\rulesxml"

def read_fields():
    fields = []
    with open(CSV_PATH, newline='', encoding='utf-8') as csvfile:
        reader = csv.DictReader(csvfile)
        for row in reader:
            fields.append({
                'xPath': row['xPath'],
                'Hierarchy': row['Hierarchy']
            })
    return fields

@app.route('/', methods=['GET', 'POST'])
def index():
    fields = read_fields()

    if request.method == 'POST':
        # Step 1: User selected fields, now show details
        if 'display_fields' in request.form:
            selected_indexes = list(map(int, request.form.getlist('selected_fields')))
            return render_template('index.html',
                                   fields=fields,
                                   show_details=True,
                                   selected_indexes=selected_indexes)

        # Step 2: User submitted form to generate XML
        elif 'generate_xml' in request.form:
            selected_indexes = [i for i in range(len(fields)) if f'selected_{i}' in request.form]

            root = ET.Element('validation')

            for i in selected_indexes:
                field_elem = ET.SubElement(root, f'field{i+1}')
                ET.SubElement(field_elem, 'xpath').text = fields[i]['xPath']
                ET.SubElement(field_elem, 'mandatory').text = request.form.get(f'field_{i}_mandatory', '')
                ET.SubElement(field_elem, 'acceptedvalues').text = request.form.get(f'field_{i}_acceptedvalues', '')
                ET.SubElement(field_elem, 'rejecterror').text = request.form.get(f'field_{i}_rejecterror', '')
                ET.SubElement(field_elem, 'linkedfield').text = request.form.get(f'field_{i}_linkedfield', '')
                ET.SubElement(field_elem, 'linkedfieldvalues').text = request.form.get(f'field_{i}_linkedfieldvalues', '')

            # Beautify the XML
            rough_xml = ET.tostring(root, encoding='utf-8')
            reparsed = minidom.parseString(rough_xml)
            pretty_xml = reparsed.toprettyxml(indent="  ")

            # Create filename and save
            timestamp = datetime.datetime.now().strftime('%Y%m%d_%H%M%S')
            filename = f"rules_{timestamp}.xml"
            filepath = os.path.join(OUTPUT_FOLDER, filename)

            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(pretty_xml)

            return render_template('result.html', filename=filename, xml_content=pretty_xml)

    # Default page load (step 1)
    return render_template('index.html', fields=fields, show_details=False)

if __name__ == '__main__':
    app.run(debug=True)
