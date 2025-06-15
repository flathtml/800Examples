from flask import Flask, render_template, request
import csv
import os
import xml.etree.ElementTree as ET
from datetime import datetime

app = Flask(__name__)

CSV_PATH = r'C:\Daya\JSON-python-tool\xpath\jsoninfo.csv'
XML_OUTPUT_DIR = r'C:\Daya\JSON-python-tool\rulesxml'

@app.route('/', methods=['GET', 'POST'])
def index():
    fields = []

    # Read xPath and Hierarchy from CSV
    try:
        with open(CSV_PATH, 'r', newline='', encoding='utf-8') as file:
            reader = csv.DictReader(file)
            for row in reader:
                if 'xPath' in row and 'Hierarchy' in row:
                    fields.append({
                        'xPath': row['xPath'],
                        'Hierarchy': row['Hierarchy']
                    })
    except Exception as e:
        return f"❌ Error reading CSV: {e}"

    if request.method == 'POST':
        fields_data = []
        for i in range(len(fields)):
            prefix = f'field_{i}_'
            field = {
                'xpath': fields[i]['xPath'],
                'hierarchy': fields[i]['Hierarchy'],
                'mandatory': request.form.get(prefix + 'mandatory'),
                'rejecterror': request.form.get(prefix + 'rejecterror') or '',
                'specificvalues': request.form.get(prefix + 'specificvalues'),
                'acceptedvalues': request.form.get(prefix + 'acceptedvalues') or '',
                'linkedfield': request.form.get(prefix + 'linkedfield') or '',
                'linkedfieldvalues': request.form.get(prefix + 'linkedfieldvalues') or ''
            }
            fields_data.append(field)

        # Build XML
        root = ET.Element('validation')
        for field in fields_data:
            f = ET.SubElement(root, 'field')
            ET.SubElement(f, 'xpath').text = field['xpath']
            ET.SubElement(f, 'hierarchy').text = field['hierarchy']
            ET.SubElement(f, 'mandatory').text = field['mandatory']
            ET.SubElement(f, 'acceptedvalues').text = field['acceptedvalues']
            ET.SubElement(f, 'rejecterror').text = field['rejecterror']
            ET.SubElement(f, 'linkedfield').text = field['linkedfield']
            ET.SubElement(f, 'linkedfieldvalues').text = field['linkedfieldvalues']

        # Save XML
        os.makedirs(XML_OUTPUT_DIR, exist_ok=True)
        timestamp = datetime.now().strftime('%Y%m%d%H%M%S')
        xml_filename = f'rules_{timestamp}.xml'
        xml_path = os.path.join(XML_OUTPUT_DIR, xml_filename)
        tree = ET.ElementTree(root)
        tree.write(xml_path, encoding='utf-8', xml_declaration=True)

        return f"✅ Rules XML generated successfully at:<br><b>{xml_path}</b>"

    return render_template('index.html', fields=fields)

# Run server
if __name__ == '__main__':
    app.run(debug=True)
 