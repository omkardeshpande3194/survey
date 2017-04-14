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
        $user_email=$_POST['email'];
        $user_password=$_POST['password'];
        $query="SELECT * FROM userlist WHERE email='$user_email'and password='$user_password' and verified=1 ";
        $result = mysqli_query($con,$query);
        if(!$result)
        {
            echo "failed";
        }
        $rows = mysqli_num_rows($result);
        if($rows==1)
        {
            $_SESSION['user_email']=$user_email;
            echo $_SESSION['user_email'];
            header("Location: home.php");
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
	<?php include 'phpincludes/header.php'; ?>
	<style>
        body{
            text-align: center;
        }
        input{
            padding: 10px;
            margin: 5px;
            width: 50%;
        }
    </style>
</head>
<body>
    <?php include 'phpincludes/nav.php';  ?>
    <h1>login here</h1>
    <a href="register.php">register here</a>
    <form action="" method="post">
        <input type="text" placeholder="email@example.com" name="email" required><br>
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