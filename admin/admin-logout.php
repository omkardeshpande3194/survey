<?php
session_start();
$logout_check=0;
if(isset($_POST['submit']))
{   
    unset($_SESSION['username']);  
    if(session_destroy())
    {
       $logout_check=1;
    }
}
?>
<html>
<head>
    <style>
        body{
            text-align: center;
        } 
    </style>   
</head>
<body>
<form action="" method="post">
<h1>do you really want to logout</h1>
<input type="submit" name="submit">
</form>
<?php
    if($logout_check==1)
    {
        header("Location: admin-login.php");
    }
?>
</body>
</html>