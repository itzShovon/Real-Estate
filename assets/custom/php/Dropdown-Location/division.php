<?php
// Create Connection
$conn = mysqli_connect('localhost', 'root', '', 'realestate');

$query = "SELECT DISTINCT division FROM location";

// Get Result
$result = mysqli_query($conn, $query);

// Fetch Data
$division = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($division);