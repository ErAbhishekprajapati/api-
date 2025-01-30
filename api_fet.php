<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data from API in Form</title>
</head>
<body>
    <h1>Display Data from API in Form</h1>

    <!-- Simple form -->
    <form id="userForm">
        <label>Name:</label>
        <input type="text" id="name" required readonly disabled><br><br> //disabled given values ko disabled kr deta hai 

        <label>Email:</label>
        <input type="email" id="email" required readonly><br><br>

        <label>Mobile:</label>
        <input type="text" id="mobile" required readonly> <br><br>

        <label>Address:</label>
        <textarea id="address" required readonly></textarea><br><br>
        <!-- <input type="text" value="John Doe" disabled> -->

        <button type="submit">Submit</button>
    </form>

    <script>
        // When the page loads, fetch data from the API and populate the form
        window.onload = function() {
            fetch('http://localhost/php_project/simple_api.php')  // Replace with the correct path to your API
                .then(response => response.json())
                .then(data => {
                    document.getElementById('name').value = data.Name;
                    document.getElementById('email').value = data.email;
                    document.getElementById('mobile').value = data.mobile;
                    document.getElementById('address').value = data.address;
                })
                .catch(error => console.log('Error fetching data:', error));
        };
    </script>
</body>
</html>
