<?php
    session_start();
    $email=$_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Homepage</title>
</head>
<body>
   <?php
        echo "Name: $name<br>";
                echo "CRN: $crn<br>";
                echo "Address: $address<br>";
                echo "Email: $email<br>";
                echo "Password: $password<br>";
                echo "Date of Birth: $dob<br>";
   ?>
   
</body>
</html>