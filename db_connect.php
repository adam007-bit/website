<?php
$servername = "mysql.railway.internal"; // Example: containers-us-west-123.railway.app
$username = "root"; // Example: root
$password = "PIyCfwPiRkqMHsjjqJdiPVzNqqskBFTK"; // Provided by Railway
$dbname = "railway"; // Example: railway_db

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
} else {
    echo "✅ Connected successfully!";
}
?>
