const url = '135-process.php';
const form = document.querySelector('form');

form.addEventListener('submit', e => {
    e.preventDefault();

    const files = document.querySelector('[type=file]').files;
    const formData = new FormData();

    for (let i = 0; i < files.length; i++) {
        let file = files[i];

        formData.append('files[]', file);
    }
  // formData.append('blob:http://localhost/b8e43b99-5360-4a2b-b07b-52f1a92646a5', file);  
    fetch(url, {
        method: 'POST',
        body: formData
    }).then(response => {
        console.log(response);
    });
});