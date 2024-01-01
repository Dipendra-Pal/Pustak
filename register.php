<?php
$DATABASE_HOST='localhost';
$DATABASE_USER='root';
$DATABASE_PASSWORD='';
$DATABASE_NAME='form';
$con = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASSWORD,$DATABASE_NAME);
if(mysqli_connect_error()) {
    exit('Sorry! Error while connecting to the Database' .mysqli_connect_error());
}
if(!isset($_POST['name'],$_POST["crn"],$_POST["email"],$_POST["password"],$_POST["confirm_password"],$_POST["dob"],$_POST["Photo"])){
    exit('All fields are required!');
}
if($stmt = $con->prepare('SELECT crn,Password FROM users WHERE email=?'))
{
    $stmt->bind_param('s',$_POST['email']);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows>0){
        echo "Email Already Exist. Please try again with next email";
    }
    else{
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $crn = $_POST["crn"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
    $confirmPassword = password_hash($_POST["confirm_password"],PASSWORD_DEFAULT);
    
    $dob = $_POST["dob"];
    $photo =$_POST["Photo"];
    // Validate passwords
    if ($password !== $confirmPassword) {
        die("Passwords do not match. Please go back and try again.");
    }

    // TODO: Add additional validation and sanitation as needed

    // Process the data (for demonstration purposes, just echoing the data)
    echo "Name: $name<br>";
    echo "CRN: $crn<br>";
    echo "Address: $address<br>";
    echo "Email: $email<br>";
    echo "Password: $password<br>";
    echo "Date of Birth: $dob<br>";

    // TODO: Add code to store data in a database or perform other necessary actions

    // Redirect to a success page or display a success message
    echo "<p>Registration successful!</p>";
    else {
    // If the form is not submitted via POST, redirect to the registration page
        header("Location: Register.html");
        exit();
}
}
$stmt->close();
} 
}
$con->close();
?>
