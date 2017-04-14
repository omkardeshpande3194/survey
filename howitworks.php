<?php
session_start();
    
    if(isset($_SESSION['user_email'])){
        die('You cannot directly access this page!');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'phpincludes/header.php'; ?>
	<style type="text/css">
		body{
			overflow-x: hidden;
		}
		.left1{
    height: 300px;
    background: #3498db;
    text-align: center;
    font-size: 2em;
  }
  .right1{
    height: 300px;
    background: #34495e;
    text-align: center;
    font-size: 2em;
  }
  .left2{
    height: 300px;
    background: #95a5a6;
    text-align: center;
    font-size: 2em;
  }
  .right2{
    height: 300px;
    background: #2ecc71;
    text-align: center;
    font-size: 2em;
  }
  .left3{
    height: 300px;
    background: #e74c3c;
    text-align: center;
    font-size: 2em;
  }
  .right3{
    height: 300px;
    background: #95a5a6;
    text-align: center;
    font-size: 2em;
  }
  .left4{
    height: 300px;
    background: #7f8c8d;
    text-align: center;
    font-size: 2em;
  }
  .right4{
    height: 300px;
    background: #d35400;
    text-align: center;
    font-size: 2em;
  }

	</style>
</head>
<body>
<?php include 'phpincludes/nav.php';  ?>
<div class="container-fluid animated bounceInLeft" style="padding:25px 0px 25px 0px;">
	<div class="row">
		<div class="col-md-7 left1">
			<div style="padding: 25px;text-align: center; color: grey;"><b>SELECT OR WRITE QUESTIONS FOR THE SURVEY</b></div>
			<div> our experts will help you to ask better questions for survey</div>
		</div>
		<div class="col-md-5 right1">
			aa
		</div>
	</div>	
</div>
<div class="container-fluid animated bounceInRight" style="padding:25px 0px 25px 0px;">
	<div class="row">
		<div class="col-md-5 left2 ">
			aa
		</div>
		<div class="col-md-7 right2">
			aa
		</div>
	</div>	
</div>
<div class="container-fluid animated bounceInLeft " style="padding:25px 0px 25px 0px;">
	<div class="row">
		<div class="col-md-7 left3 ">
			aa
		</div>
		<div class="col-md-5 right3">
			aa
		</div>
	</div>	
</div>
<div class="container-fluid animated bounceInRight" style="padding:25px 0px 25px 0px;">
	<div class="row">
		<div class="col-md-5 left4 ">
			aa
		</div>
		<div class="col-md-7 right4">
			aa
		</div>
	</div>	
</div>


<?php include 'phpincludes/footer.php';  ?>
</body>
</html>