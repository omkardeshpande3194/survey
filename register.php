<?php

    //-------------------database connection--------------------------------//

    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "login";
    $final=0;

    $conn = mysqli_connect($servername, $db_username, $db_password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //---------------------submit query--------------------------------------//

    if(isset($_POST['submit']))
        {

            //--------------------userinfo variables(user_x)------------------//
            $user_fullname=$_POST['full_name'];
            $user_email=$_POST['email'];
            $user_password=$_POST['password'];
            echo $user_fullname." ".$user_email." ".$user_password;

            //-----------------------insert to db-----------------------------//
            $sql = "INSERT INTO userlist (fullname,email,password)
            VALUES ('$user_fullname', '$user_email', '$user_password')";

            if (mysqli_query($conn, $sql)) 
            {
                $final=1;
            } 
            else 
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
    }
    mysqli_close($conn);
    if($final==1)
    {
    header("Location:login.php");
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

    <a href="login.php">login here</a>

    <h1>register</h1>

    <form action="" method="post">
        <input type="text" placeholder="fullname" name="full_name"><br>
        <input type="text" placeholder="email@example.com" name="email"><br>
        <input type="password" placeholder="enter password" name="password"><br>
        <input style="width:25%" type="submit" name="submit">
    </form>

</body>

</html>