<?php

include('../config/dbconnect.php');


$rollno = $_POST['rollno'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phoneno = $_POST['phoneno'];


echo $rollno;
echo "<br>";

echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $address;
echo "<br>";
echo $phoneno;
echo "<br>";


$result = mysqli_query ($conn, "INSERT INTO student(rollno,name,email,phone,address)
 VALUES('$rollno','$name','$email','$address','$phoneno')");
 //display success meassage
 echo "<font color='green'>Data Added Sucessfully";
 header("Location: http://localhost/crud/");
?>