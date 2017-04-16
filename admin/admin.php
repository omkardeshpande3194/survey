<?php
    
    $con = mysqli_connect("localhost","root","","login");
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    
    session_start();
    
    if(!isset($_SESSION['username'])){
        die('You cannot directly access this page!');
    }

        //---------------------------fetch verified-------------------------//
        $v_query="SELECT * FROM userlist where verified=1";
        $v_result = mysqli_query($con,$v_query);
        if(!$v_result)
        {
            echo "failedv";
        }
        $i_v=1;
        while($v_row=mysqli_fetch_array($v_result,MYSQLI_ASSOC))
        { 
            $data_v[$i_v]['id']=$v_row['key'];
            $data_v[$i_v]['name']=$v_row['fullname'];
            $data_v[$i_v]['email']=$v_row['email'];
            $i_v++;
        }

        //-----------------------fetch non verified---------------------------//
        $nv_query="SELECT * FROM userlist where verified=0";
        $nv_result = mysqli_query($con,$nv_query);
        if(!$nv_result)
        {
            echo "failednv";
        }
        $i_nv=1;
        while($nv_row=mysqli_fetch_array($nv_result,MYSQLI_ASSOC))
        { 
            $data_nv[$i_nv]['id']=$nv_row['key'];
            $data_nv[$i_nv]['name']=$nv_row['fullname'];
            $data_nv[$i_nv]['email']=$nv_row['email'];
            $i_nv++;
        }


        //--------------------------verification query----------------------------------------//
        function query_verify($name){
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
        //--------------------------block query----------------------------------------//
        function query_block($name){
            // Create connection
            echo "step1";
            $conn = new mysqli("localhost","root","","login");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "UPDATE userlist SET verified=0 WHERE fullname='$name'";

            if ($conn->query($sql) === TRUE) {
                echo $name."blocked"."<br>";
            } else {
                echo "Error updating record: " . $conn->error;
            }
           
            
        }
            
?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../abootstrap.css">
	<style>
        body{
            text-align: center;
            background: #f1f8e9;
        }
        input{
            float: right;
        }
        .form-elem{
            padding: 10px;
            text-align: left;
            background: #8bc34a;
            margin:2px;
            border-radius: 3px;
            box-shadow: 0px 0px 5px rgba(0,0,0,0.56);
        }
        .form-container{
            padding: 20px;
        }
        form{
            border: 1px solid;
            border-radius: 4px;
            padding: 10px;
            box-shadow: 0px 0px 15px black;
        }
    </style>
</head>
<body>

<a href="admin-logout.php">logout</a>
<div class="container">
    <div class="row">
       <!---------------------non verified form---------------------------------->
        <div class="col-md-6 form-container">
        <?php

            echo "<form action='' method='post'>";
            echo "<h1>non verified users</h1>";
            for($j_nv=1;$j_nv<$i_nv;$j_nv++)
            {   
                echo "<div class='form-elem'>".$data_nv[$j_nv]['name']."<input type='checkbox' name='".$j_nv."' value='accept'>"."</input></div><br>";
            }
            echo "<input style='margin:auto;width:50%;float:none;' type='submit' name='submit' value='verify'>"."<br>";
            echo "</form>";
            $name="name";
            if(isset($_POST['submit']))
            {
                for($j_nv=1;$j_nv<$i_nv;$j_nv++)
                {     
                        if(isset($_POST[$j_nv]) && $_POST[$j_nv]=="accept")
                        {
                            $x=$data_nv[$j_nv]['name'];
                            query_verify($x);
                        }
                }
            }
        ?>
        </div>
        <!--------------------------verified form----------------------------------------->
        <div class="col-md-6 form-container">
           
            <?php
            
            echo "<form action='' method='post'>";
            echo "<h1>verified users</h1>";
            for($j_v=1;$j_v<$i_v;$j_v++)
            {  $j_vname=$j_v."_v";
                echo "<div class='form-elem'>".$data_v[$j_v]['name']."<input type='checkbox' name='".$j_vname."' value='accept'>"."</input></div><br>";
            }
            echo "<input style='margin:auto;width:50%;float:none;' type='submit' name='submit' value='block'>"."<br>";
            echo "</form>";
            $name="name";
            
            if(isset($_POST['submit']))
            {   
            
                for($j_v=1;$j_v<$i_v;$j_v++)
                {       $j_vname=$j_v."_v";
                        
                        if(isset($_POST[$j_vname]) && $_POST[$j_vname]=="accept")
                        {   
                            $x=$data_v[$j_v]['name'];
                            query_block($x);
                        }
                }
            }
        ?>
        </div>
    </div>  
</div>
</body>    
</html>