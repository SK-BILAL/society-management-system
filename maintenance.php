<?php
$mon=mysqli_connect("localhost","root","","user");
if($mon)
{
    echo "Connected.";
}

if($_POST['submit']){
    $name=$_POST['f1'];
    $details=$_POST['f2'];
    
    
    $sql="UPDATE signup SET maintain='$details' WHERE Name='$name' ";
    $exec=mysqli_query($mon,$sql);
    if($exec)
    {
        echo "<b><center> Message POSTED..</b></center>";
    }
}
?>
