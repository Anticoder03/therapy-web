<?php
include_once './includes/db.php';

// Collect form data safely
$name       = $conn->real_escape_string($_POST['name']);
$phone      = $conn->real_escape_string($_POST['phone']);
$city       = $conn->real_escape_string($_POST['city']);
$speciality = $conn->real_escape_string($_POST['speciality']);
$email      = $conn->real_escape_string($_POST['email']);
$country    = $conn->real_escape_string($_POST['country']);
$message    = $conn->real_escape_string($_POST['message']);

// Insert query
$sql = "INSERT INTO contacts (name, phone, city, speciality, email, country, message)
        VALUES ('$name', '$phone', '$city', '$speciality', '$email', '$country', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Message submitted successfully!'); window.location.href = 'contact.php';</script>";
} else {
    echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "'); window.location.href = 'contact.php';</script>";
}

$conn->close();
?>
