<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "save_messages"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input
    if (empty($_POST['message'])) {
        die("Error: Message field is required.");
    }

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO messages (message) VALUES (?)");
    $stmt->bind_param("s", $message);

    // Get the message from the form
    $message = $_POST['message'];

    // Execute the query
    if ($stmt->execute()) {
        echo "Message saved successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>