<?php

$conn= mysqli_connect("localhost","root","","user");
if(!$conn)
{
    echo " Not connected.";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$name= $_POST['Name'];
$email= $_POST['Email'];
$password= $_POST['Password'];
$mobile= $_POST['Number'];
$bname= $_POST['Bname'];
$fname= $_POST['Fno'];
$insert=false;
$Sno='NULL';
$main='NULL'; 
}
//$file= $_FILES['photo']['name']; FOR IMAGE
    
    
//$orig_file= $_FILES["avatar"]["tmp_name"];    
//$ext=pathinfo( $_FILES["avatar"]["name"], PATHINFO_EXTENSION);    
//$target_dir = '/pr/upload/';
//$destination= "$target_dir$mobile.$ext";
//
//    
//exit();
    
if($name=="" || $email=="" || $password=="" || $mobile=="" || $bname=="" || $fname=="")
{
    echo "<center><b> Some Fields are empty..</center>"; 
}
else
{
    
    $query="INSERT into signup values('$Sno','$name','$email','$password','$mobile','$bname','$fname','$main')";
    $exec_query=mysqli_query($conn,$query);
    if($exec_query)
    {
        $insert=true;
//        move_uploaded_file($_FILES['photo']['tmp_name'],"$file"); FOR IMAGE
    }    
}
    if($insert)
    {
    echo " <html><head> 
      <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>
      </head>
      <title> </title>
      <body>
      <div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong> Account created.!</strong> You will receive confirmation Email soon.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div> </body> </html>";
    
    }
//    $email;
//$subject = " Your Account has been created Successful..";
//$body = "Hi,This is a confirmation email for your registration.";
//$headers = "From: skbtrades9994@gmail.com";
//
//if(mail($email,$subject,$body,$headers))
//{
//    echo "Email successfully sent to $email...";
//} 
//else 
//{
//    echo "Email sending failed...";
//}
include "profile.php";

?>