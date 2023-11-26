<!--
//$title = 'View Record'; 
//    // Get attendee by id
//    if(!isset($_GET['id'])){
//        include 'includes/errormessage.php';
        
//    } else{
//        $id = $_GET['id'];
//        $result = $crud->insertattendees($id);    
-->
<?php
$id = $_GET['id'];
?>

<html>
    <head>
    <title> Records</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
            <link rel="stylesheet" href="view.css">

    </head>
    
    <body>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <div class="container">    
        <center>
    <div class="card" style="width: 18rem;">
  <img src="/pr/bg1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
      <h5 class="card-title"><b><h2>User Info</h2></b></h5>
    <p class="card-text">
        
        <?php
  
         $con=mysqli_connect("localhost","root","","user");
          if(!$con){ echo "Connection Failed.";}
        
        
          $sql= "SELECT * FROM signup WHERE Sno='$id'" ;
          $result=mysqli_query($con,$sql);
          $r=mysqli_fetch_assoc($result);
          echo "Name is: ".$r['Name'],"<br>";
          echo "Email is: ".$r['Email'],"<br>";
          echo "Mobile no: ".$r['Mobile'],"<br>";
          echo "Building Name: ".$r['Bname'],"<br>";
          echo "Flat No:".$r['Fno'],"<br>";
        ?>
              
        </p>
        <a href="viewrecord.php" class="btn btn-info">Back to List</a>
        <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-danger">Delete</a>
  </div>
            </div></center></div>
   
  </script>
        
    
<br>
<br>
<br>
    </body>
</html>
