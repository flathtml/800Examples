from flask import Flask, render_template, request, jsonify
import os
import requests

app = Flask(__name__)

# Set JSON folder as raw Windows path
JSON_FOLDER = r"C:\Daya\JavaSpring\JSONValidator\jsonfiles"
API_URL = 'http://localhost:8080/api/policy/validate'

@app.route('/')
def index():
    try:
        files = [f for f in os.listdir(JSON_FOLDER) if f.endswith('.json')]
    except FileNotFoundError:
        files = []
    return render_template('index.html', files=files)

@app.route('/validate', methods=['POST'])
def validate():
    filename = request.form['json_file']
    filepath = os.path.join(JSON_FOLDER, filename)

    try:
        with open(filepath, 'rb') as f:
            files = {'file': (filename, f, 'application/json')}
            response = requests.post(API_URL, files=files)
            response.raise_for_status()
            result = response.json()
            return jsonify(result)
    except Exception as e:
        return jsonify({"errors": [str(e)], "rows": []})

if __name__ == '__main__':
    app.run(debug=True)
