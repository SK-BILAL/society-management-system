<?php
session_start();

if(isset($_SESSION['username']))
{
?>    
    <html>
        <head>
                <link rel="stylesheet" type="text/css" href="welcome.css">            
        </head>
        <body> 
            <center>
            <br>
            <h1><b> Welcome !!!! </b></h1>
                 
                <div class="Welcome"> 
                <form  action="logout.php"    method='post'>
                <input  type='submit'     name='Logout'  value='Logout'>
                </form>
                </div>    
            
            </center>
</html>
        </body>
<?php
}
else
{
   header(" Location: miniproject.html");
}
?>