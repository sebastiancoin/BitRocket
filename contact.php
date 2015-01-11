<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us</title>
<link href="css/custom.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="images/Favicon2.png" type="image/x-icon" />
 <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="css/agency.css" rel="stylesheet">

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
      <a class="navbar-brand" href="index.php"><img src="images/BitRocket_Logo.png" width="200" height="41" class="img-responsive" /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php" style="color:black">Home</a></li>
        <li><a href="business-search.php" style="color:black">Business Search</a></li>
        <li><a href="contact.php" style="color:black">Contact Us</a></li>
        
          </ul>
        
   
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 spacing-lg">
		<h1 class="text-center spacing-lg">We want to hear from you!</h1>
        </div>
    <div class="col-lg-4">
    	<img src="images/luis-qr.png" class="img-responsive center-block"/>
    </div>    
    
    <div class="col-lg-8">
    	<p>Take a moment to let us know any suggestions you might have and thank you</p>
    </div>
    
    
</div>


 <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-conv">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



<div class="container-fluid row-color">
	<div class="container footer-padding" >
    	<div class="col-lg-9 col-md-5 col-sm-5 col-xs-12">
    		<h2>About</h2>
            <p>BitRocket is a system that allows bitcoin users to recruit bitcoin pledges for businesses for them to start accepting bitcoin as payment. </p>
        </div><!--col-lg-5-->
        <div class="col-lg-3 col-md-7 col-sm-7 col-xs-12">
        	<ul style="list-style:none">
            	<li >
                	<a style="margin-right:20%; font-size:"><p>Home</p></a>
                    <a href="business-search.php" style="margin-right:20%"><p>Business Search</p></a>
                    <a style="margin-right:20%" href="contact.php"><p>Contact</p></a>
                </li>
            </ul>
        </div>    
    </div><!--container-->
</div><!--container-fluid-->

</body>
</html>