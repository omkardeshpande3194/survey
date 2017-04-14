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
        function verify($name){
            echo "success";
        }
        
        
?>

<html>
<?php
    
    echo "<form action='' method='post'>";
    for($j=1;$j<$i;$j++)
    {
        echo $data[$j]['name']."<input type='checkbox' name='".$data[$j]['name']."'>"."<br>";
    }
    echo "<input type='submit' name='submit'>"."<br>";
    echo "</form>";
    if(isset($_POST['submit']))
    {
        for($j=1;$j<$i;$j++)
        {
                if(isset($_POST['$data[$j]["name"]']))
                {
                    echo "success";
                }
        }
    }
?>
    
</html>