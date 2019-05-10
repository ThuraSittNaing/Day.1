<?php
include "config/dbconnect.php";

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM student WHERE id=$id");
while($res = mysqli_fetch_array($result))
{
    $rollno = $res['rollno'];
    $name = $res['name'];
    $email = $res['email'];
    $address = $res['address'];
    $phone = $res['phone'];

    // echo $rollno;
    // echo "<br>";
    // echo $name;
    // echo "<br>";
    // echo $email;
    // echo "<br>";
    // echo $address;
    // echo "<br>";
    // echo $phone;
    // echo "<br>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HelloPhp</title>
        <style>
            .footer{
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: red;
                color: white;
                text-align: center;
            }
            #data_table{
                width: 100%;
                height: auto;
            }
        </style>
    </head>
<body>
    
<div style="background-color:green; width:100%; height:80px; padding: 60px; margin-top: 10px; ">
    <b><center><font size="32">Linn Internship Program</font></center></b>
    </div>
    <br>
    
  
  <form action="query/update.php" method="POST">
    <label for="Rollno">Rollno</label><br>
    <input type="text" name="rollno" value="<?php echo $rollno?>"><br>

    <label for="Name">name</label><br>
    <input type="text" name="name" value="<?php echo $name?>"><br>

    <label for="Email">Email</label><br>
    <input type="email" name="email" value="<?php echo $email?>"><br>

    <label for="phone no">Phoneno</label><br>
    <input type="text" name="phoneno" value="<?php echo $phone?>"><br>

    
    <label for="Address">Address</label><br>
    <textarea name="address"><?php echo $address; ?></textarea><br>

    <br>
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <br>
    <input type="submit" name="update" value="Update">

    
   <button type="button">
   <a href="index.php">Back</a></button>
  
</form>
 <br><br>

    <div class="footer" >
    <p>Footer</p>
        
    </div>
        
    
</body> 
</html>