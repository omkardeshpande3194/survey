<?php
    $con = mysqli_connect("localhost","root","","login");
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    session_start();
    $user_email=$_SESSION['user_email'];
    $query="SELECT * FROM userlist where email='$user_email'";
    $res=mysqli_query($con,$query);
    if(!$res)
    {
        echo "failed";
    }
    else{
        $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
    }
    
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'phpincludes/header.php'; ?>
	
</head>
<body>
<?php include 'phpincludes/nav1.php';  ?>
<div class="container">
    <div class="row">
        <div style="background:red;height:300px;" class="col-md-8">
            <p><?php echo $row['fullname'];?></p>
        </div>
        <div style="background:yellow;height:300px;" class="col-md-4"></div>
    </div>
</div>
</body>
</html>