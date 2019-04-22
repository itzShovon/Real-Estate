<?php
$district = $_GET['district'];
// Create Connection
$conn = mysqli_connect('localhost', 'root', '', 'realestate');

$query = "SELECT DISTINCT city FROM location where district = '$district'";

// Get Result
$result = mysqli_query($conn, $query);

// Fetch Data
$city = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($city);
?>