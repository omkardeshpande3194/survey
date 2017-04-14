<?php
    $invalid=0;
    $con = mysqli_connect("localhost","root","","login");
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    session_start();
        
        $query="SELECT * FROM userlist WHERE verified=0 ";
        $result = mysqli_query($con,$query);
        if(!$result)
        {
            echo "failed";
        }
        
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
        { 
            echo "<form action='' method='post' >".
                "<label>".$row['fullname']."<label>"."<input type='button' name='".$row['fullname']." value='accept' ></input>"."</br>"
                ."</form>"
                ;
        }

        mysqli_free_result($result);

        
?>

<html>
   
    
</html>