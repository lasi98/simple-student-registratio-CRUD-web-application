<?php

require_once "connection.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$guardian = $_POST['guardian'];
$password = $_POST['password'];



    $sql = "INSERT INTO student (first_name, last_name, gender, dob, email, address, mobile, guardian, password)
    VALUES ('$first_name', '$last_name','$gender','$dob','$email','$address','$mobile','$guardian','$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: http://localhost/sdtreg/index.php");
      } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
?>