<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'demo';

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// SQL command to create the 'persons' table
$sql = "CREATE TABLE IF NOT EXISTS person (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL
)";

// Execute the SQL command
if ($conn->query($sql) === true) {
    echo 'Table created successfully.';
} else {
    echo 'Error creating table: ' . $conn->error;
}

// Close the connection
$conn->close();
?>
