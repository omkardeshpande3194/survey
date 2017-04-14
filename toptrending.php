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
	<?php include_once 'phpincludes/header.php';  ?>
</head>
<body>
<?php include 'phpincludes/nav.php'; ?>
<div class="container top">
	
</div>


<?php include 'phpincludes/footer.php';  ?> 
</body>
</html>