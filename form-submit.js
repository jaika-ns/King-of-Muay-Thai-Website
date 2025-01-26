document.getElementById('visa-form').addEventListener('submit', function (e) {
    e.preventDefault(); // Prevent form from reloading the page

    const formData = new FormData(this);
    const data = {};

    formData.forEach((value, key) => {
      data[key] = value;
    });

    // Send form data using fetch
    fetch('/submit-form', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    })
    .then(response => response.text())
    .then(data => {
      alert('Form submitted successfully!');
      console.log(data); // Handle server response
    })
    .catch(error => {
      alert('There was an error submitting the form.');
      console.error(error); // Handle error
    });
  });