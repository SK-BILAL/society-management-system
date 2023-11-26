<?php

   
$id = $_GET['id'];

 $con=mysqli_connect("localhost","root","","user");
          if(!$con){ echo "Connection Failed.";}

        
        
        
          $sql= "Delete from signup WHERE Sno='$id'" ;
          if(mysqli_query($con,$sql))
          {
              
            echo "
            <html><head> 
      <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>
      </head>
      <title> </title>
      <body>
      <div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong> Deleted Successful.!</strong> Record have been deleted...
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div> </body> </html>
            ";  
            sleep(5);  
          	header('location:viewrecord.php');
          }
          else
          {
          	echo 'Delete Operation Failed';
          	sleep(3);
          	header('location:viewrecord.php');
          }
?>







