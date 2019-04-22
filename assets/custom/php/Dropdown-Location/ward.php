<?php
$city = $_GET['city'];
// Create Connection
$conn = mysqli_connect('localhost', 'root', '', 'realestate');

$query = "SELECT DISTINCT ward FROM location where city = '$city'";

// Get Result
$result = mysqli_query($conn, $query);

// Fetch Data
$ward = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($ward);
?>