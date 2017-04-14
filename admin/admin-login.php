<?php
    $invalid=0;
    $con = mysqli_connect("localhost","root","","login");
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    session_start();

    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $user_password=$_POST['password'];
        $query="SELECT * FROM admin WHERE username='$username'and password='$user_password'";
        $result = mysqli_query($con,$query);
        if(!$result)
        {
            echo "failed";
        }
        $rows = mysqli_num_rows($result);
        if($rows==1)
        {
            $_SESSION['username']=$username;
            header("Location: admin.php");
        }
        else{
            $invalid=1;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
        body{
            text-align: center;
        }
        form{
            margin: auto;
        }
        input{
            padding: 10px;
            margin: 5px;
            width: 50%;
        }
    </style>
</head>
<body>
   <h1>admin login</h1>
    <form action="" method="post">
        <input type="text" name="username" required><br>
        <input type="password" placeholder="password" name="password" required><br>
        <input style="width:25%" type="submit" name="submit">
    </form>
    <?php
        if($invalid==1)
        {
            echo "incorrect information\nenter again";
        }
    ?>
</body>
</html>