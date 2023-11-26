<?php

$con=mysqli_connect("localhost","root","","user");
if(!$con){echo " connection failed..";}
$sql="SELECT * FROM signup";
$exec_query=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($exec_query);

?>


<html>
 <head>
     
     <link rel="stylesheet" type="text/css" href="Style.css">
    </head>
<body>
   
<center>
    <div class="box">
    <form action="login.php" method="POST">
    <div class= "username">    
    <label>Username</label>
    <input type='text' name='username' placeholder='Enter The Username'><br><br>
    </div>
    <div class="password">    
    <label>Password</label>    
    <input type='password' name='password' placeholder='Enter your Password'><br><br>
    </div>    
    <div class="Submit">
    <input  type='submit' href="login.php?id=<?php echo $r['Name'] ?>" value='Login'><br<br>
    </div>    
    
    <div class="login">
    <h1><b>Login</h1></b> 
    </div>

        </form>
    </div>
        </center>
    </body>    
    </html>