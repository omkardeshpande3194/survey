
<?php
    $con = mysqli_connect("localhost","root","","login");
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    session_start();
    if(!isset($_SESSION['user_email']))
    {
        die('You cannot directly access this page!');
    }
     //----------------------------------------------------------//
        $s_query="SELECT * FROM survey";
        $s_res = mysqli_query($con,$s_query);
        if(!$s_res)
        {
            echo "failed";
        }
        else{
            $i=1;
            while($s_row = mysqli_fetch_array($s_res,MYSQLI_BOTH))
            { 
                $q[$i]['question']=$s_row['question'];
                $q[$i]['username']=$s_row['username'];
                $i++;
            } 
        }
    
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include_once 'phpincludes/header.php';  ?>
</head>
<body>
<?php include 'phpincludes/nav1.php'; ?>

<?php
        echo "<form action='' method='post'>";
        for($j=1;$j<$i;$j++)
        {   $username=$q[$j]['username'];
            $username_agree=$username."agree";
            $username_disagree=$username."disagree";
            $query="SELECT * FROM userlist where fullname='$username' ";
            $res=mysqli_query($con,$query);
            if(!$res)
            {
                echo "failed";
            }
            else{
                $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
            }
            
            echo $username.":".$q[$j]['question'].
                "<input type=button  value='agree' name='<?php echo $username_agree?>'></input>".
                "<input type=button  value='disagree' name='<?php echo $username_disagree?>'></input>".
                "</br>"."</br>";
           
        } 
        echo "</form>";
?>

<?php include 'phpincludes/footer.php';  ?> 
</body>
</html>