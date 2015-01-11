<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Sign Up</title>
<link href="css/custom.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="images/Favicon2.png" type="image/x-icon" />
</head>


<body>
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="images/BitRocket_Logo.png" width="200" height="41" class="img-responsive"</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" style="color:black">Link 1</a></li>
        <li><a href="#" style="color:black">Link 2</a></li>
        <li><a href="#" style="color:black">Link 3</a></li>
        <li class="dropdown">
          <a href="#" style="color:black" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#" style="color:black">Action</a></li>
            <li><a href="#" style="color:black">Another action</a></li>
            <li><a href="#" style="color:black">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#" style="color:black">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--end-navbar-->

<div class="container-fluid row-color">
	<div class="container container-content" >
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        	<?php include 'user-form.php';?>
	
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        
        </div>
	
    </div>
</div>
 


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>


</html>