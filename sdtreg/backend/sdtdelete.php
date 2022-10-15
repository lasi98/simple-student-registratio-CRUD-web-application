<?php
    require_once "connection.php";
    $id = $_GET["id"];
    $query = "DELETE FROM student WHERE id = '$id'";
    if (mysqli_query($conn, $query)) {
        header("location: http://localhost/sdtreg/studentlist.php");
    } else {
         echo "Something went wrong. Please try again later.";
    }
?>