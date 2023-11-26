<?php
session_start();
if(($_SESSION['username'])){
    
?>
<html>
  <title>User Profile</title>
     <head>
                  <link rel="stylesheet" href="profile1.css">

              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  </head>
  <body>
      <!--Start of Tawk.to Script-->

      
      
<!--End of Tawk.to Script-->  
      <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60bf5cf4dd60a20abbe5390a/1f7lo6791';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
      
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
      
      
       <marquee width="100%" direction="left" height="8%" scrollamount="12">
    <?php
        $name= $_POST['Name'];
        $con=mysqli_connect("localhost","root","","user");
         $sql= "SELECT * FROM signup WHERE Name='$name'";
         $result=mysqli_query($con,$sql);
          $r=mysqli_fetch_assoc($result);
         echo " <b>Maintenance Details: </b>". $r['maintain'],"<br>";
    ?></marquee>
      
      <div class="container">
     <center>
    <div class="card" style="width: 30rem ;">
  <img src="/pr/s.JPG" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> USER PROFILE</h5>
    <p class="card-text">
        
        
<?php
        $name= $_POST['Name'];
        $con=mysqli_connect("localhost","root","","user");
          if(!$con){ echo "Connection Failed.";}

          $sql= "SELECT * FROM signup WHERE Name='$name'";
          $result=mysqli_query($con,$sql);
          $r=mysqli_fetch_assoc($result);
             
             
          echo "<b>Name is: <b>".$r['Name'],"<br>";
          echo "<b>Email is: <b>".$r['Email'],"<br>";
          echo "<b>Mobile no: <b>".$r['Mobile'],"<br>";
          echo "<b>Building Name: <b>".$r['Bname'],"<br>";
          echo "<b>Flat No: <b>".$r['Fno'],"<br>";
          echo "<b>Maintenance Details:  <b>".$r['maintain'],"<br>";
  ?>
      </p>

  </div>
         </div></center></div>
    
     
       <form action="logout.php"  method="post" >
           <input type="submit"  name="Submit" class="btn btn-dark" value="LOGOUT">
      </form>

       
  </body>
  </html>
<?php
         }
    else{
header("Location: miniproject.php");
         }
             
?>