<!--
$title = 'Edit Record'; 

    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php'; 

    $results = $crud->getSpecialties();
    if(!isset($_GET['id']))
    {
        //echo 'error';
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }
    else{
        $id = $_GET['id'];
        $attendee = $crud->getAttendeeDetails($id);
    
-->
<?php

          
$con=mysqli_connect("localhost","root","","user");
if(!$con){echo " connection Failed..";}


$id= $_GET['id'];

?>

<html>
<head>
    
    <title>Edit Record</title>
    <link rel="stylesheet" href="edit.css">

      </head>
      <body>
          
          <div class="box">
    <h1>Edit Now</h1>
    <form action = "edit1.php"  method="POST" >  
    <input type="text" name='Name' class="input-box" placeholder="Enter Your Name">
    <br>
    <input type="email" name ='Email' class="input-box" placeholder="Enter Your Email">
    <br>    
    <input type="password" name='Password' class="input-box" placeholder="Enter password">
    <br>
    <input type="number" name='Number' class="input-box" placeholder="Enter Mobile Number">
    <br> 
    <input type="text" name='Bname' class="input-box" placeholder="Enter Your Building Name">
    <br>    
    <input type="number" name='Fno' class="input-box" placeholder="Enter Your Flat Number">
    <br>           
    <a type='submit' name='submit' href="edit1.php?id=<?php echo $id=$_GET['id']?>" class="edit-btn">Save Changes</a>     
    <a type='button' href="viewrecord.php" name='cancel' class="back-btn"> Cancel </a> 
                        
    </form>
    </div>
    </body>
</html>


