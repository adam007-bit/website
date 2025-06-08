<?php
$servername = mysql.railway.internal; // Example: containers-us-west-XX.railway.app
$username = root; // Example: root
$password = PIyCfwPiRkqMHsjjqJdiPVzNqqskBFTK; // Your database password
$dbname = railway; // Your database name

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
} else {
    echo "✅ Connected successfully!";
}
?>
