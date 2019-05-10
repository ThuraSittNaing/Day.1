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
    
    <button type="button">
        <a href="form.php">Add new Student</a>
    </button><br>
    <br>
    <header><b><center><font size="3">Internship Students Listing</font></center></b></header><br>
    <br>
  <form action="query/store.php" method="post">
    <label for="Rollno">Rollno</label><br>
    <input type="text" name="rollno"><br>

    <label for="Name">name</label><br>
    <input type="text" name="name"><br>

    <label for="Email">Email</label><br>
    <input type="email" name="email"><br>

    <label for="phone no">Phoneno</label><br>
    <input type="text" name="phoneno"><br>

    
    <label for="Address">Address</label><br>
    <textarea name="address"></textarea><br>

    <input type="radio" name="gender" name="male">
    <label for="male">Male</label>

    <input type="radio" name="gender" name="Female">
    <label for="Female">Female</label><br>
    <br>

    
   <input type="submit" value="Confirm">
   <button type="button">
   <a href="index.php">Back</a></button>
  
</form>
 <br><br>

    <div class="footer" >
    <p>Footer</p>
        
    </div>
        
    
</body> 
</html>