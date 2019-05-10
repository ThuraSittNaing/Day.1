<?php
include "config/dbconnect.php";

$result = mysqli_query($conn, "SELECT * FROM student ORDER BY id ASC");

//$res = mysqli_fetch_array($result);
//var_dump ($res);


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
    
    <div style="background-color:green; width:100%; height:80px;padding: 60px;">
        <b><center><font size="32">Linn Internship Program</font></center></b>
    </div>
    <br>
    
    <button type="button">
        <a href="create.php">Add new Student</a>
    </button><br>
    <br>
    <p><b><center><font size="4">Linn Internship Student Listing</P></b></center></font>
    <br>
    <table border="1" id="data_table">
         <tr>
                
                <th>RollNo</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
        </tr>
                
    
            
         <?php
        while($res = mysqli_fetch_array ($result)){
            echo "<tr>";
            echo "<td>".$res['rollno']."</td>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['email']."</td>";
            echo "<td>".$res['address']."</td>";
            echo "<td>".$res['phone']."</td>";
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> |
            <a href=\"query/delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')
            \">Delete</a></td>";

            echo "</tr>";
        }
    ?>
    </table>
    
    
    <br><br>
    <div class="footer">
    <p>Footer</p></div>
        
    
</body> 
</html>