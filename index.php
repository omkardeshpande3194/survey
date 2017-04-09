<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'phpincludes/header.php'; ?>
</head>
<body>
<?php include 'phpincludes/nav.php';  ?>
<div class="container">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	    <li data-target="#myCarousel" data-slide-to="3"></li>
	  </ol>
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img class="img-responsive" width="100%" src="blue.jpg" alt="Chania">
	    </div>

	    <div class="item">
	      <img class="img-responsive" width="100%" src="blue.jpg" alt="Chania">
	    </div>

	    <div class="item">
	      <img class="img-responsive" width="100%" src="blue.jpg" alt="Flower">
	    </div>

	    <div class="item">
	      <img class="img-responsive" width="100%"src="blue.jpg" alt="Flower">
	    </div>
	  </div>
	  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>
<div class="container-fluid info-cont">
	<div class="row">
		<div class="col-md-4 col-xs-12 info animated bounceIn" style="background: #2ecc71">
			<div class="info-in" ></div>
		</div>
		<div class="col-md-4 col-xs-12 info animated bounceIn" style="background:#bdc3c7">
			<div class="info-in" ></div>
		</div>
		<div class="col-md-4 col-xs-12 info animated bounceIn" style="background:#e74c3c ">
			<div class="info-in" ></div>
		</div>
	</div>
</div>
<?php include 'phpincludes/footer.php';  ?>
</body>
</html>