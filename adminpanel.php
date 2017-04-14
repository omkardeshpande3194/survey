<?php
    $invalid=0;
    $con = mysqli_connect("localhost","root","","login");
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    session_start();
    print_r($_SESSION['admin']);
?>

<html>
   
    
</html>