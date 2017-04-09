<?php
echo ' <nav class="navbar navbar-default nav-custom animated fadeIn" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button  onclick="animationClick(button,fadeIn)" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><b>WebSiteName</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li id="button1" class="navc"><a href="index.php">Home</a></li>
        <li id="button2" class="navc"><a href="howitworks.php">How it works</a></li>
        <li id="button3" class="navc"><a href="#">Get Paid</a></li>
        <li id="button4" class="navc"><a href="#">Pricing Scheme</a></li>
        <li id="button5" class="navc"><a href="#">Top Trending</a></li>
        <li id="button6" class="navc"><a href="login.php"> Login/Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav> '; 
 ?>