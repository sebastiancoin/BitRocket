<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Business Search</title>
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
      <a class="navbar-brand" href="index.php"><img src="images/BitRocket_Logo.png" width="200" height="41" class="img-responsive" /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php" style="color:black">Home</a></li>
        <li><a href="business-search.php" style="color:black">Business Search</a></li>
        <li><a style="color:black" href="contact.php">Contact Us</a></li>
        
          </ul>
        
   
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron jumbotron2" style="margin-bottom: 0px;">
 	<div class="container text-center">
         <div class="col-lg-10 col-lg-offset-1 jumbotron-position">
          <h1 style="color:white"  class="spacing-md">Business that have been Requested</h1>
          <p style="color:white" class="hidden-xs">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
         
  	</div>
   </div><!--container-->   
</div><!--jumbotron-->

<div class="container container-content">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	<h1 class="text-center spacing-lg" style="color:#8CC63E">Current Businesses</h1>
    </div>
    <!--business-1-->
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 spacing-lg">
    	<img  class=" img-responsive center-block img-circle" src="images/thelab.jpg" height="250" width="250" />
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 spacing-lg">
    	<h3 class="text-center">The Lab Miami</h3>
        <p style="text-transform:lowercase">THE LAB MIAMI IS A CAMPUS FOR CREATIVE ENTREPRENEURS. WE CONVERTED A 10,000 SQFT WAREHOUSE IN THE WYNWOOD ARTS DISTRICT INTO A COLLABORATIVE WORK AND EVENT SPACE. IT IS A COLLISION POINT FOR MIAMI'S FORWARD-THINKING MINDS.</p>
        <span class="btn btn-primary">Amount Pledged so far: .9 btc</span> 
        <button onclick="myFunction()" class="btn btn-conv pull-right">I want to Pledge!</button>
<p style="padding-top:10px" id="demo"></p>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    		<img src="images/qr.jpg" class="img-responsive" style="padding-top:20px"/>
        </div>
    <!--business-1-->
    
    
    <div class="clearfix"></div>
      <!--business-1-->
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    	<img class="center-block img-responsive img-circle" src="images/brick-house.jpg" height="250" width="250" />
    </div>
    	
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    	<h3 class="text-center"> Brick House</h3>
        <p>A 1920s house is the backdrop for a beer garden with craft brews & bourbon, plus a patio & DJs.</p>
        <span class="btn btn-primary">Amount Pledged so far: .05 btc</span> 
         <button onclick="myFunction2()" class="btn btn-conv pull-right">I want to Pledge!</button>
         <p id="demo2"></p>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    		<img src="images/qr.jpg" style="padding-top:20px"/>
        </div>
    <!--business-1-->
    
</div>
 <div id="map-canvas"></div>


<div class="container-fluid row-color">
	<div class="container footer-padding" >
    	<div class="col-lg-9 col-md-5 col-sm-5 col-xs-12">
    		<h2>About</h2>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
        </div><!--col-lg-5-->
        <div class="col-lg-3 col-md-7 col-sm-7 col-xs-12">
        	<ul style="list-style:none">
            	<li >
                	<a style="margin-right:20%; font-size:" href="index.php"><p>Home</p></a>
                    <a style="margin-right:20%" href="business-search.php"><p>Business Search</p></a>
                    <a style="margin-right:20%" href="contact.php"><p>Contact</p></a>
                </li>
            </ul>
        </div>    
    </div><!--container-->
</div><!--container-fluid-->
<strong>
<script>
function myFunction() {
    var x;
    if (confirm('The Wallet is 16Nf8JLaFdPGRg52hDXme66rym5kUpinyh') == true) {
        x = "Thank you! We will Review your Pledge";
    } else {
        x = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = x;
}
</script>

</strong>    


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
      var LocationData = [
    [25.7999913,-80.2005348, "400 Northwest 26th Street Miami, FL 33127" ], 
    [25.803673, -80.199011, "187 Northwest 28th StreetMiami, FL 33127" ], 
    [25.784831,-80.138872, "1340 N Michigan Ave #6bMiami Beach, FL 33139" ], 
    [25.862359, -80.324403, "7810 Northwest 98th Street Hialeah, FL 33016" ], 
    [25.941691, -80.299319, "18300 Northwest 62nd Avenue #200 Hialeah, FL 33015" ], 
    [25.862359, -80.324403, "6710 Southwest 117th Avenue Kendall, FL 33183" ], 
    [25.7051662, -80.3829424, "7810 Northwest 98th Street Hialeah, FL 33016" ],   
    [25.574861, -80.341021, "20601 Old Cutler Road Cutler Bay, FL 33189" ],   
    [26.00963, -80.158981, "2544 Van Buren Street Hollywood, FL 33020" ], 
    [25.6703465, -80.32099, "10775 South Dixie Highway Pinecrest, FL 33156" ], 
];
 
function initialize()

{
    var map = 
        new google.maps.Map(document.getElementById('map-canvas'));
    var bounds = new google.maps.LatLngBounds();
    var infowindow = new google.maps.InfoWindow();
    for (var i in LocationData)
    {
        var p = LocationData[i];
        var latlng = new google.maps.LatLng(p[0], p[1]);
        bounds.extend(latlng);
         var iconBase = 'http://i.imgur.com/8KF66dS.png';
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            icon: iconBase,
            title: p[2]
        });
  

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.setContent(this.title);
            infowindow.open(map, this);
        });
    }
     
    map.fitBounds(bounds);
}
 
google.maps.event.addDomListener(window, 'load', initialize);

    </script>


</body>
</html>