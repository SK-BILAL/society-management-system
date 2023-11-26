<?php
include("db_connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$user= $_POST['uname'];    
$new= $_POST['newpass'];
$conf= $_POST['conpass'];
    
if($user=="" || $new=="" || $conf=='')
{
    echo " <center><b> Fields are empty, please fill..</center>";
    
}
else
{
    if($new!=$conf)
    {
        echo " New Password and Confirm Does'nt Match!!";
    }
    else
    {
        
    $query = " UPDATE signup SET Password='$conf' WHERE Name='$user'" ;
    $exec_query = mysqli_query($conn,$query);
    if($exec_query){ $insert=true;}
    if($insert)
    {
    echo " <html><head> 
      <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>
      </head>
      <title> </title>
      <body>
      <div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong> Your Password has reset.!</strong> You will receive confirmation Email soon.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div> </body> </html>";
    
    }}}}
?>
