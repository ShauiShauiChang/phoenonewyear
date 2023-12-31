<?php
// Replace 'your_db_username' and 'your_db_password' with your database credentials
$conn = new mysqli('localhost', 'u754697303_chris', 'Aeh3216548', 'u754697303_chris');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT COUNT(*) AS licenseCount FROM licenses";
$result = $conn->query($query);

if ($result === false) {
    die("Query failed: " . $conn->error);
}

$row = $result->fetch_assoc();
echo ($row['licenseCount'] * 30 -30);

$conn->close();
?>
