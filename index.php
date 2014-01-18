<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet"  href="css/bootstrap.min.css" media="screen">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" media="screen">
 <link rel="stylesheet" href="css/bootstrap-theme.min.css">
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
 
 <!-- <link rel="stylesheet" href="social-likes.css"> -->
 <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">  

 <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet" />

        <link href="//netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="social-buttons.css">
<title></title>
<style type="text/css">

	textarea{
		width: 450px;
		height: 250px;
		max-width: 450px;
		max-height: 250px;
	}
#main-content
{
	padding-top: 60px;
}
.nav {
        margin-top: 28px; /* this is a faux center fix for the nav options - adjust this if you wish to change the logo height or the font of the menu items */
}
	body{
		 padding-top: 100px; 
      	 background-repeat:no-repeat;
      	 background-size:100%;
		height: 100%;
		display: block;
			padding:0 !important;
			margin:0;*/
			margin-top: 125px;
	min-height: 100%;
	min-height:100%;
font:14psx/1.3 'Segoe UI',Arial, sans-serif;
/*  background:url(img/background.png);*/
  background-color: #F7F7F6;
  font-family:Arial, Helvetica, sans-serif;
  color:000;
  font-size:12px;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
   background-attachment:fixed;
	}
body.element{
	position: absolute;
	bottom: 0;
}
body >.element{
	position: fixed;
}
.element {
    position: relative;
}
 
/*replace the content value with the 
corresponding value from the list below*/
 
.element:before {
    content: "\f000"; 
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
/*--adjust as necessary--*/
    color: #000;
    font-size: 18px;
    padding-right: 0.5em;
    position: absolute;
    top: 10px;
    left: 0;
}

</style>

<!--modal window script-->
	<style type="text/css">


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
/* Set the fixed height of the footer here */
/*#footer {
  height: 60px;
  background-color: #f5f5f5;
}*/
.hide{
	display: none !important;
}



#footer1 {
  height: 60px;
  background-color: #f5f5f5;
  text-align: center;
    background:url(img/footer.png);
    color: white;
    text-align: center;
}


.container .text-muted {
  margin: 20px 0;
}

ul.nav li.dropdown:hover > ul.dropdown-menu{
   /* display: block; */   


   display: inline-table;
}
/* fix space */
.navbar .dropdown-menu {
 margin-top: 0px;
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
legend
{
  text-align: center;
}
.span4{
  overflow: auto;
 /* height: 500px;*/
}
#abt{
margin-left: 10px;
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
      ul >a:hover
      {
        background:#000080;
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


function URL(){

  document.href='https://www.facebook.com/pages/WEA-GROUP/337837783026968';
}
$('#fb').on('click',function(){

window.location="https://www.facebook.com/pages/WEA-GROUP/337837783026968";

});

</script>
</head>
<body>

<div class="container">

<header class="row">
  <div class="span12">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-inner">
    <a  href="#"class="brand"><img  width="100"src="img/logo.png"></a>
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    <div class="nav-collapse">
   <ul class="nav">
     <li class="active"><a href="index.php">Home</a></li>

 <li><a href="client.php">Politics</a></li>
    <li class="divider-vertical"></li>
     <li><a href="business.php">Business</a></li>
     <li class="divider-vertical"></li>
     <li><a href="local.php">Local</a></li> 
  <li class="divider-vertical"></li>
     <li><a href="international.php">International</a></li> 
     <li class="divider-vertical"></li>
     <li><a href="education.php">Education</a></li> 
     <li><a href="health.php">Health</a></li>
      <li class="divider-vertical"></li>
     <li><a href="entertainment.php">Entertainment</a></li> 
     <li class="divider-vertical"></li>
     <li><a href="sports.php">Sports</a></li>
     <li class="divider-vertical"></li>
      <li><a href="about.php">About</a></li>
   <li><a href="contact.php">Contact</a></li>
     <!-- <li><a  target="_blank" href="http://ialert.ugisoft.com/ialert.apk">Download</a></li> -->
    </ul>
<!-- <form action='search.php' method='GET' class="form-search pull-right " >
<input type='text'class="search-query" ame='search' placeholder ="Enter key word">

</form> -->
    </div>
    </div>
    </nav>

  </div>
</header>

<div class="row" id="main-content" style=" margin-top:70px;margin-bottom:10px;">
<div class="span12">
<div class="carousel slide" id="slider">
<ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
   <!--  <li data-target="#myCarousel" data-slide-to="5"></li> -->
  </ol>
<div class="carousel-inner">
<div class="item active">
<!-- <img src="http://placehold.it/1180x650"> -->
<img src="img/1.png">
</div><!--data-->

<div class="item ">
<!-- <img  src="http://placehold.it/1180x650">
 -->
 <img src="img/2.png">
<!-- <div class="carousel-caption">
<h4>Headline for image 2</h4>
<p>Descriptiom for image 2</p>
</div> -->

</div><!--data-->
<div class="item ">
<img src="img/3.png">
</div><!--data-->
<div class="item ">
<img src="img/4.png">
</div><!--data-->
<div class="item ">
<img src="img/5.png">
</div><!--data-->
</div>
<a class="left carousel-control" href="#slider" data-slide="prev">&lsaquo;</a>
<a class="right carousel-control" href="#slider" data-slide="next">&rsaquo;</a>
</div><!-- endslider-->
</div>
<hr/>
<div class="row">
<div class="span12" style="overflow:auto; border:0px;">
<div class="span4 well" style="margin-top:10px;">
  <legend>Make your story great.</legend>
  <p id ="abt"> 
     iAlert is an open source app that enables 
     all over the world to produce and publish
      professional-grade news with their Android phone, as safely and securely as possible.
     It provides an interactive training guide, walkthroughs, 
     and templates for users to follow as 
     they plan their piece and capture media. 
    The app then helps assemble the content into a finished format, 
    with cuts and basic graphics.</p>
  </div>
  <div class="span6 well" style="margin-top:10px; margin-right:-10px;" >
  <legend>Download</legend>
  <p id ="abt"><strong>Try iAlert Beta!</strong><br/>
Download the app and become one of the 
first beta testers of iALert. 
Reports bugs, provide feedback, 
and help us make a better news making app.</p>
<a href="#"><img style="margin-left:10px; margin-bottom:10px;" src="img/link.png"></a>
  </div>
  </div>
</div>


<!--quick guide-->
<div class="row">
<div class="span12" style="overflow:auto; border:0px;">
  <p id ="abt"><img  width="1125px"style=" margin-left:10px; margin-bottom:10px;" src="img/down screen.png"></p>
<a href="#"></a>
  </div>
  </div>
</div><!-- end of main content section-->

<div id="push"></div>

</div>

<!-- end main contanner-->

<!-- Contact Us Model Box -->
<!-- <div class="modal fade" id="contact" role="dialog" arialabblledby="ModaLabel" aria-hidden="true">

<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="ModalLabel">Contact us</h4>
</div>
<div class="modal-body">
<form>
  
  <input type="text" class="input-block-level" placeholder="enter name">
   <input type="text" class="input-block-level" placeholder="enter name">

</form>

</div>
<div class="modal-footer">
   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
</div>
</div>

</div>

</div> -->

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

      <div id="footer1">
      <div class="container">
        <p class="text-muted"> © 2013| ialert.ugisoft.com | All Rights Reserved | privacy rights | Terms and comditions</p>

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
