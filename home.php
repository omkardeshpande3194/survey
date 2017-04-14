
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
   <h1>your profile</h1><br>
    <p>name=<?php echo $row['fullname']?></p><br>
    <p>email=<?php echo $row['email']?></p><br>
    <a href="edit.php">edit profile</a>
    <form>
        <textarea rows="5" cols="60" name="textinput"></textarea>
        <input type="submit" name="submit">
    </form>
</div>

</body>
</html>