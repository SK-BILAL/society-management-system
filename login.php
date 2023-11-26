<?php
//
//$conn=mysqli_connect('localhost','root','','user');
//if($conn)
//{
//    $username=$_POST['username'];
//    $password=md5($_POST['password']);
//    if($username == '' || $password == '')
//    {
//        echo "Invalid Entry";
//    }
//    else
//    {
//                                  
//     $query="SELECT * FROM table1 WHERE Username='$username' AND Password='$password'"; // isme dbms se value fetch krni h or dekhna h ki jo bhi val enter kre h wo dbms me present h ya nhi... hence SELECT lgega          
//     $exec_query=mysqli_query($conn,$query);  
//     $s=mysqli_num_rows($exec_query);     // isme kisi bhi exec query se no of row fect krke dega mtlb select query ka result kitne rows me aara hai..
//      if($s>=1)
//      {
//          echo "Login Successful";
//      }
//      else
//      {
//          echo "Login Failed";
//      }
//   }   
//}


$conn = mysqli_connect('localhost','root','','user');
if($conn)
{
    echo "<center><b>Conncetion Successfull!!!</center>" . "<br>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$username= $_POST['username'];
$password= $_POST['password'];
    
if($username=="" || $password=="")
{
    echo " <center><b> Fields are empty.</center>";
    
}
else
{
    $query = "SELECT * FROM signup WHERE Name='$username' AND Password='$password'";
    $exec_query = mysqli_query($conn,$query);
    $r=mysqli_num_rows($exec_query);
    if($r>0){
        
        echo "<center>Logged In Successful.</center>","<br>";
        session_start();
        $_SESSION['username']=$username;
    }
}
}
?>
<html>
    <head> </head>
    <title> </title>
    <body>
        <center>
        <a class="btn btn-info" href="profile.php?name=<?php echo $username ?>">Show Details</a>
                
        </center>    
    </body>
</html>