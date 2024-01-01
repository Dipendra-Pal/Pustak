<?php
//$email = $_SESSION['Enail']; // Assuming you are using sessions for authentication

// Log the login activity to the database
$conn = new mysqli("localhost", "?", "?", "form");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$loginTime = date("Y-m-d H:i:s");
//$sql = "INSERT INTO LoginLog (username, login_time) //VALUES ('$username', '$loginTime')";

if ($conn->query($sql) === TRUE) {
    echo "Login successful!";
} else {
    echo "Error logging login activity: " . $conn->error;
}

$conn->close();

// Rest of your login script...
?>
