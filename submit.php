
<?php
require_once 'connect.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    // Insert data into database
    $sql = "INSERT INTO contacts (name, number, email, service, message) VALUES ('$name', '$number', '$email', '$service', '$message')";
    $conn->query($sql);

    // Close connection
    $conn->close();

    // Display success message
    echo "<p>Your request has been submitted successfully!</p>";
}
?>