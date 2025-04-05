<?php
include 'db_connect.php';  // Include database connection

// Capture form data
$name = $_POST['name'];
$time = $_POST['time'];
$place = $_POST['place'];
$phone_no = $_POST['phone_no'];
$emergency = $_POST['emergency'];

// Prepare and execute SQL statement
$stmt = $conn->prepare("INSERT INTO reports (name, time, place, phone_no, emergency) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $time, $place, $phone_no, $emergency);

if ($stmt->execute()) {
    echo "<script>alert('Report submitted successfully!'); window.location.href='reporting.php';</script>";
} else {
    echo "<script>alert('Error submitting report!'); window.history.back();</script>";
}

$stmt->close();
$conn->close();
?>
