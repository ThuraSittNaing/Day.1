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
                text-algin: center;
            }
            #data_table{
                width: 100%;
                height: auto;
            }
        </style>
    </head>
<body>
    
    <div style="background-color:green; width:100%; height:80px; padding: 60px;">
        <b><center><font size="32">Linn Internship Program</font></center></b>
    </div>
    <br>
    
    <button type="button">
        <a href="create.php">Add new Student</a>
    </button><br>
    <br>
    <header><b><center><font size="3">Internship Students Listing</font></center></b></header><br>
    <br>
    <table border="1" id="data_table">
         <tr>
                <th>RollNo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
         </tr> 
         <tr>
             <td>1</td>
             <td>MgMg</td>
             <td>mgmg@gmail.com</td>
             <td>09234234234</td>
             <td>Address</td>
         </tr>   
    </table>
    
    <br><br>
    <div class="footer" >
        <div>><center>Footer</center></div>
    </div>
        
    
</body> 
</html>