<?php include("includes/config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet"  href="css/bootstrap.min.css" media="screen">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" media="screen">
 <link rel="stylesheet" href="css/bootstrap-theme.min.css">
 <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="social-buttons.css">
 <!-- <link rel="stylesheet" type="text/css" href="css/social-buttons.css">
 <link rel="stylesheet" type="text/css" href="social-buttons-3.css"> -->
 <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet" />

        <link href="//netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet" />

 <link rel="stylesheet" href="social-likes.css">
<script src="jquery.min.js"></script>
<script src="social-likes.min.js"></script>
<!--  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> -->
<title></title>
<style type="text/css">
	
	textarea{
		width: 450px;
		height: 250px;
		max-width: 450px;
		max-height: 250px;
	}
  .form-search
{
  padding-top: 10px;
  padding-right: 20px;
}
	

.nav{
  font: 50px ;
   font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
     color: #000;
    font-size: 18px;
}
	body{
		 padding-top: 100px; 
      	 background-repeat:no-repeat;
      	 background-size:100%;
		height: 100%;
		display: block;
			padding:0 !important;
			margin:0;*/
	min-height: 100%;
	min-height:100%;
font:14psx/1.3 'Segoe UI',Arial, sans-serif;
background:url(img/bg.jpg);
  font-family:Arial, Helvetica, sans-serif;
  color:000;
  font-size:12px;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-attachment: fixed;
	}

body.element{
	position: absolute;
	bottom: 0;
}
body >.element{
	position: fixed;
}
</style>

<!--modal window script-->
	<style type="text/css">
/*style*/
  .modalDialog {
    position: fixed;
  font-family: Arial, Helvetica, sans-serif;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(0,0,0,0.8);
  z-index: 99999;
  opacity:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
}
/*functionality*/
.modalDialog:target {
  opacity:1;
  pointer-events: auto;
}

.modalDialog > div {
  width: 400px;
  position: relative;
  margin: 10% auto;
  padding: 5px 20px 13px 20px;
  border-radius: 10px;
  background: #fff;
  background: -moz-linear-gradient(#fff, #999);
  background: -webkit-linear-gradient(#fff, #999);
  background: -o-linear-gradient(#fff, #999);
}
/*close*/
.Close {
  background: #606061;
  color: #FFFFFF;
  line-height: 25px;
  position: absolute;
  right: -12px;
  text-align: center;
  top: -10px;
  width: 24px;
  text-decoration: none;
  font-weight: bold;
  -webkit-border-radius: 12px;
  -moz-border-radius: 12px;
  border-radius: 12px;
  -moz-box-shadow: 1px 1px 3px #000;
  -webkit-box-shadow: 1px 1px 3px #000;
  box-shadow: 1px 1px 3px #000;
}

.close:hover { background: #00d9ff; }

ul.nav li.dropdown:hover >ul.dropdown-menu{
  display: block;
}
.navbar .dropdown-menu{
  margin-top: 0px;
}
#hel
{
	height: 500px;
	overflow: auto;
}
#footer1 {
  height: 60px;
  background-color: #f5f5f5;
    background:url(img/footer.png);
    color: white;
    text-align: center;
}


/* Custom page CSS
-------------------------------------------------- */
/* Not required for template or sticky footer method. */






.container .text-muted {
  margin: 20px 0;
}

#push,
  #footer {
    height: 60px;
      }
       .container {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }
      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }
     #footer {
        background-color: #f5f5f5;
        background:url(img/footer.png);
        color: white;
      text-align: center;
      }
       @media (max-width: 767px) {
        
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }
</style>

<script type="text/javascript">
	$(document).ready(function () {
    $('.toggle1').hide();
    $('a.togglelink1').on('click', function (e) {
        e.preventDefault();
        var elem = $(this).next('.toggle1')
        $('.toggle1').not(elem).hide('slow');
        elem.toggle('slow');
    });
});
$(document).ready(function(){
	$('.carousel').carousel(
	{
		interval:5000
	})

});
// alert("Welcome to iAlert site:")


map = new GMap2(document.getElementById('"maps"'); 
map.addControl(new GSmallMapControl()); 
map.addControl(new GMapTypeControl());
map.setCenter(new GLatLng(0.5470573,34.0201552), 15); 
var point=new GLatLng(lattitudelongitude);
map.addOverlay(new GMarker(point);
map.enableGoogleBar(); // <- new code
</script>
</head>
<body>
<div class="container">

<header class="row">
  <div class="span12">
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="navbar-inner">
  <a href="#" class="brand"><img src="img/logo.png" class="img-circle"></a>
  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>  
  </a>
  <div class="nav-collapse collapse">
  <ul class="nav">
  <li class="divider-vertical"></li>  
  <li><a href="admin.php?lg=1">Logout</a></li>
  <li class="divider-vertical"></li> 
  
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Verified News</a>
    <ul class="dropdown-menu">
     <li><a href="apol.php">Politics</a></li>
    
     <li><a href="abiz.php">Business</a></li>
     
     <li><a href="alocal.php">Local news</a></li> 
  
     <li><a href="ainter.php">Internation news</a></li> 
     
     <li><a href="aeduc.php">Education</a></li> 
     <li><a href="aheal.php">Health</a></li>
      
     <li><a href="aenter.php">Entertainment</a></li> 
     
     <li><a href="aspor.php">Sports</a></li>
    </ul>
  </li>
  <li class="divider-vertical"></li>  
  <!-- <li><a href="contact1.php">Contact</a></li> -->
<!--   <li class="divider-vertical"></li>   -->
  <li><a href="#">Download app</a></li>
  <li class="divider-vertical"></li>    
   <!--  <li class="dropdown">
      
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social</a>
      <ul class="dropdown-menu">
     <li><a target="_blank" href="https://www.facebook.com/pages/WEA-GROUP/337837783026968"><i class="icon icon-facebook"></i>facebook</a></li>
      <li><a target="_blank" href="#"><i class="icon icon-twitter"></i>twitter</a></li>
      <li><a target="-blank" href="#"><i class="icon icon-google-plus"></i>google+</a></li>
      </ul>
    </li> -->
    <li class="divider-vertical"></li>
  <li><a href="users.php">user</a></li>  
  <li class="divider-vertical"></li> 
  </ul>
  <ul class="nav nav-pills nav-stacked">
  <li class="">
    <a href="#">
      <span class="badge pull-right badge-important">42</span>
      Notifications
    </a>
  </li>
  <li class="divider-vertical"></li>
  <li><a href="locations.php">Locations</a></li>
</ul>
  <form method="GET" action="#"  class="form-search pull-right"  id ="search">
      <input type="text" class="search-query" name="term" placeholder="enter search">
    </form>
  </div>
  </div>
  </nav>
  </div>
</header>

<div class="row" id="main-content" style="background:white;padding-top:70px;">
 
<!--   <iframe src="https://mapsengine.google.com/map/embed?mid=zw8Oq9xltdn4.kc1xMQs6RZIs" width="1080" height="560"></iframe> -->

<iframe  id="maps"style="margin-left:10px; margin-top:10px;" 
src="https://mapsengine.google.com/map/embed?mid=zw8Oq9xltdn4.kc1xMQs6RZIs" width="1080" height="580">
</iframe>


   <div id="push"></div>

</div><!-- end main contant-->
</div><!--main-container-->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

     <div id="footer1">
      <div class="container">
        <p class="text-muted">©2013|ialert.ugisoft.com|All Rights Reserved | privacy rights|Terms and comditions</p>

      </div>
    </div>
    <!-- AddThis Smart Layers BEGIN -->
<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52d57f6d0195eba7"></script>
<script type="text/javascript">
  addthis.layers({
    'theme' : 'dark',
    'share' : {
      'position' : 'left',
      'numPreferredServices' : 5
    }, 
    'follow' : {
      'services' : [
        {'service': 'facebook', 'id': 'pages/WEA-GROUP/337837783026968'},
        {'service': 'google_follow', 'id': '104339353281233456079/posts'}
      ]
    },  
    'whatsnext' : {},  
    'recommended' : {} 
  });
</script>
<!-- AddThis Smart Layers END -->
</body>

</html>
