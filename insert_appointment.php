<?php 
include './includes/db.php';
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$date = $_POST['date'];
$status = 'pending';

$sql = "INSERT INTO appointments (name, phone, email, appointment_date, status) VALUES ('$name', '$phone', '$email', '$date', '$status')";
$res = $conn->query($sql);
echo "appointment inserted successfully";

if ($res === TRUE) {
    echo "<script>alert('appointment Booked successfully'); window.location.href = 'index.php';</script>";
} else {
    echo "<script>alert('failed to book appointment'); window.location.href = 'index.php';</script>";
}
$conn->close();

?>