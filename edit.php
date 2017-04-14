
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

    if(isset($_POST['submit']))
    {       
        if(isset($_POST['full_name'])){
            $user_fullname=$_POST['full_name'];
        }
        else{
            $user_fullname=$row['full_name'];
        }
        if(isset($_POST['email'])){
            $_SESSION['email']=$_POST['email'];
            $user_email=$_POST['email']; 
        }
        else{
            $user_email=$row['email'];
        }
            //----------------------update-----------------------------//
            $key=$row['key'];
            $sql = "UPDATE userlist SET fullname='$user_fullname', email='$user_email' WHERE fullname='$user_fullname'";

            if (mysqli_query($con, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($con);
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
<?php include 'phpincludes/nav1.php';  ?>
<div class="container">
   <h1>edit profile</h1><br>
   <form action="" method="post">
        <label>fullname</label><input type="text" placeholder="<?php echo $row['fullname'] ?>" name="full_name"><br>
        <label>email</label><input type="text" placeholder="<?php echo $row['email'] ?>" name="email"><br>
        <input style="width:25%" type="submit" name="submit">
    </form>
    
    
    
</div>

</body>
</html>