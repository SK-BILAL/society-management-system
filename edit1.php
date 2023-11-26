<?php

$con=mysqli_connect("localhost","root","","user");
if($con){echo " <b>Connected ..";}

//if($_POST['submit']) {
if(isset($_POST['submit'])){
$u_name= $_POST['Name'];    
$u_email= $_POST['Email'];
$u_password= $_POST['Password'];
$u_mobile= $_POST['Number'];
$u_bname= $_POST['Bname'];
$u_fname= $_POST['Fno'];    
$insert=false;
$id= $_GET['id'];


//if($_SERVER['REQUEST_METHOD'] == 'POST')
if($u_name=="" || $u_email=="" || $u_password=="" || $u_mobile=="" || $u_bname=="" || $u_fname=="")
{
    echo "<center><b> Some Fields are empty..</center>"; 
}
else
{

$sql="UPDATE signup SET Name='$u_name', Email='$u_email', Password='$u_password', Mobile='$u_mobile', Bname='$u_bname', Fno='$u_fname' WHERE Sno='$id'";
    
$exec_query=mysqli_query($con,$sql);
       if($exec_query)
    {
        $insert=true;
       }
}
}
?>

 <html>
    <head>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>

    </head>
    <title>  Record Edit. </title>
    <body> 
      
      <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4' crossorigin='anonymous'></script>
        <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js' integrity='sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p' crossorigin='anonymous'></script>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js' integrity='sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT' crossorigin='anonymous'></script>
        
        <div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong> Record Edited.!</strong> This record has been Updated..
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div> 
        </body>
    </html>