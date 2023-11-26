<?php
$con=mysqli_connect("localhost","root","","user");
if(!$con)
{
    echo "Connection failed.";
}

if($_SERVER['REQUEST_METHOD']=="POST")
{
$uname=$_POST['username'];
$pass=$_POST['password'];
if($_POST['radio_btn']){    
$radio_value= $_POST['radio_btn'];}   
    
if($uname=="" || $pass=="" || $radio_value=="")
{
    echo "Fields are empty..";
}
    else
    {
        if($radio_value=="user")
        {
            
             session_start();
        $_SESSION['username']=$uname;
            header("location: profile1.php");
            }
else
{
     $sql= "SELECT * FROM Admin WHERE Name='$uname' AND Password='$pass'";
        $exec_query= mysqli_query($con,$sql);
          $r=mysqli_num_rows($exec_query);
        if($r>0){
            
            session_start();
        $_SESSION['username']=$uname;
    
header("Location: viewrecord.php");
}


}}}
?>
<!--
else{
        
        $sql="SELECT * FROM Admin WHERE Name='$uname' AND Password='$pass' ";
        $exec_query= mysqli_query($con,$sql);
          $r=mysqli_num_rows($exec_query);
        if($r>0){
            
            session_start();
        $_SESSION['username']=$uname;
            echo "<html>
            <head>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet'' integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>
            <title></title>
            </head>
            <body>
            
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong> Successful..</strong> Login Successful!!..
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div></body></html>";
            
        }
        
    }    
}}
?>-->
<html>
    <head> </head>
    <title> </title>
    <body>
        <center>
        <a class="btn btn-info" href="profile.php?name=<?php echo $uname?>">Show Details</a>
                
        </center>    
    </body>
</html>