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
    
  <div style="margin-left: 600px;" >
  <form action="query/store.php" method="POST">
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
  
   <input type="submit" value="Confirm">
   <button type="button">
   <a href="index.php">Back</a></button>
  
</form>
</div>
 <br><br>

    <div class="footer" >
    <p>Footer</p>
        
    </div>
        
    
</body> 
</html>