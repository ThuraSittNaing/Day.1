<?php

include('../config/dbconnect.php');

if(isset($_POST['update']))
{ 
    $id = $_POST['id'];
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phoneno = $_POST['phoneno'];

    // echo $id;
    // echo "<br>";
    // echo $rollno;
    // echo "<br>";
    // echo $name;
    // echo "<br>";
    // echo $email;
    // echo "<br>";
    // echo $address;
    // echo "<br>";
    // echo $phoneno;
    // echo "<br>";
    // exit;

  //updating the table
    $result = mysqli_query($conn, "UPDATE student SET rollno='$rollno',name='$name'
    ,email='$email',phone='$phoneno',address='$address' WHERE id=$id");


    //redirecting to index.php
    header("Location: http://localhost/crud/");
}
?>