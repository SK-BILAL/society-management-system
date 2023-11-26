<html>
    <head>
        <link rel="stylesheet" href="test.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    </head>
    <title></title>

        
        <body>
      
    <div class="container">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <div class="navbar-nav mr-auto">
          <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="viewrecord.php">View Attendees</a>

        </div>
        <div class="navbar-nav ml-auto">
          <?php 
              if(!isset($_SESSION['userid'])){
          ?>
            <a class="nav-item nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
          <?php } else { ?>
            <a class="nav-item nav-link" href="#"><span>Hello <?php echo $_SESSION['username'] ?>! </span> <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="manageusers.php">Manage Users</a>
            <a class="nav-item nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
          <?php } ?>
        </div>
      </div>
      </div>
      </div>
               
  </nav>
    <br/>
      
    <table class="table">
        <tr>
            
            <th>Sno</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile No</th>
            <th>Building Name</th>
            <th>Flat No</th>
        </tr>
        <?php
          $con=mysqli_connect("localhost","root","","user");
          if(!$con){ echo "Connection Failed.";}

          $sql= "SELECT * FROM signup";
          $result=mysqli_query($con,$sql);
           $sno=0;
        while($row=mysqli_fetch_assoc($result))
        {
            $sno=$sno+1;
                    
          ?>
           <tr> 
               <td><?php echo $sno ?></td> 
                <td><?php echo $row['Name'] ?></td>
                <td><?php echo $row['Email'] ?></td>
                <td><?php echo $row['Mobile'] ?></td>
                <td><?php echo $row['Bname'] ?></td>
                <td><?php echo $row['Fno'] ?></td>
               
                <td>
                        <a class="btn btn-success" href='view.php?id=<?php echo $row['Sno']?>'>View</a>
                        <a class="btn btn-info"  href='edit.php?id=<?php echo $row['Sno']?>'>Edit</a>
                        <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $row['Sno'] ?>" class="btn btn-danger">Delete</a>
<!--
                        <php
                         if($_SERVER['REQUEST_METHOD']=="POST"){
                             if($_POST['submit']){
                                
                              header("Location:view.php");    
                            
                             }
                         }
                         ?>
-->
                        <!--                

                         
                    <button href="view.php?id=<php echo $row['Sno']?>" class="edit btn btn-sm btn-primary" name="id">View</button>
-->
                    
                     <!--<button href='edit.php?id=<php echo $row['Sno']?>' name="edit" class='edit btn                           btn-sm btn-primary'>Edit</button>-->
                    
                </td>
           </tr> 
        <?php }?>
    </table>

<!--
//    deletes = document.getElementsByClassName('delete');
//    Array.from(deletes).forEach((element) => {
//      element.addEventListener("click", (e) => {
//        console.log("edit ");
//        sno = e.target.id.substr(1);
//
//        if (confirm("Are you sure you want to delete this note!")) {
//          console.log("yes");
//          window.location = `/crud/index.php?delete=${sno}`;
//          // TODO: Create a form and use post request to submit a form
//        }
//        else {
//          console.log("no");
//        }
//      })
//    })
-->
<br>
<br>
<br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

<!--
 <script>
//      name= document.getElementsByClassName("view");
//      Array.from(name).forEach((element) => {
//      element.addEventListener("click", (e) => {
//      console.log("view", e);
//        tr = e.target.parentNode.parentNode;
//        title = tr.getElementsByTagName("td")[0].innerText;
//        description = tr.getElementsByTagName("td")[1].innerText;
//        console.log(title, description);
//        titleEdit.value = title;
//        descriptionEdit.value = description;
//        snoEdit.value = e.target.id;
//        console.log(e.target.id)
//        $('#editModal').modal('toggle');
      })
    })
     </script>
-->
 <div class="login">
    <h1><b>Manage Maintenace</h1></b> 
    </div>
<center>
<form action="maintenance.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Name of member</label>
    <input type="text" class="form1" name="f1" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
<!--
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
-->
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label1">Maintenance Details.</label>
    <input type="text" class="form-control1" name="f2" id="exampleInputPassword1">
  </div>
<div class="form-floating">
  <textarea class="form-floating" placeholder="Write Details here" id="floatingTextarea2" style="height: 150px"></textarea>
  
</div>
    <div class="mb-4"><br>
        <button type="submit"  name="submit" class="btn btn-dark">POST</button></div>
    </form></center>
  

    </body>
</html>
