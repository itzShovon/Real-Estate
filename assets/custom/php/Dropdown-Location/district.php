<?php
$division = $_GET['division'];
// Create Connection
$conn = mysqli_connect('localhost', 'root', '', 'realestate');

$query = "SELECT DISTINCT district FROM location where division = '$division'";

// Get Result
$result = mysqli_query($conn, $query);

// Fetch Data
$district = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($district);
?>