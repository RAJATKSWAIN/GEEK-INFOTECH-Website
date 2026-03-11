<?php
// Database credentials
$host     = "sql104.infinityfree.com";
$username = "if0_40254012";
$password = "Geekinfo2025"; // Replace with actual password
$database = "if0_40254012_geekinfotech";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection safely
if ($conn->connect_error) {
    // Log error instead of displaying
    error_log("DB Connection failed: " . $conn->connect_error);
    // Optional: show a user-friendly message
    echo "<h3>We're experiencing technical difficulties. Please try again later.</h3>";
    exit;
}
?>