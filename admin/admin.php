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
        $i=1;
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
        { 
            $data[$i]['id']=$row['key'];
            $data[$i]['name']=$row['fullname'];
            $data[$i]['email']=$row['email'];
            $i++;
        } 
        function query($name){
            // Create connection
            $conn = new mysqli("localhost","root","","login");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "UPDATE userlist SET verified=1 WHERE fullname='$name'";

            if ($conn->query($sql) === TRUE) {
                echo $name."verified"."<br>";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
        
        
?>

<html>
<a href="admin-logout.php">logout</a>
<?php
    
    echo "<form action='' method='get'>";
    for($j=1;$j<$i;$j++)
    {
        echo $data[$j]['name']."<input type='checkbox' name='".$j."' value='accept'>"."<br>";
    }
    echo "<input type='submit' name='submit'>"."<br>";
    echo "</form>";
    $name="name";
    if(isset($_GET['submit']))
    {
        for($j=1;$j<$i;$j++)
        {     
                if(isset($_GET[$j]) && $_GET[$j]=="accept")
                {
                    $x=$data[$j]['name'];
                    query($x);
                }
        }
    }
?>
    
</html>