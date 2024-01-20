<?php
// MySQL database credentials
$hostname = 'localhost';  // Replace with your database hostname
$username = 'root';  // Replace with your database username
$password = 'Yogesh@009';  // Replace with your database password
$database = 'data';  // Replace with your database name

// Create a MySQL connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process login form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form inputs
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Store the inputs in the database
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Data inserted successfully
        echo "Data inserted into database.";
    } else {
        // Failed to insert data
        echo "Error: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>


