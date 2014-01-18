<?php include("includes/config.php");?>
<?php
if(isset($_POST['submit']))
{
  $to ="weatechgroup@gmail.com";
  $from =$_POST['email'];
  $name=$_POST['fullname'];
  $subject ="Form submission";
  $Subject2 ="Copy of yout email";
  $message =$name.""."wrote the following:"."\n\n".$_POST['msg'];

   $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['msg'];

   $headers ="From:".$name;

   $headers2 ="To:".$to;

   mail($to,$Subject,$message,$headers);

    mail($from,$subject2,$message2,$headers2);

   echo 'message sent'.$name .",we appreciate your effort:";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet"  href="css/bootstrap.min.css" media="screen">
<link class="cssdeck" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.2.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" media="screen">
 <link rel="stylesheet" href="css/bootstrap-theme.min.css">
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
 <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
 <link rel="stylesheet" href="social-likes.css">
 <link rel="stylesheet" type="text/css" href="social-buttons.css">

 <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet" />

        <link href="//netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet" />
<script src="jquery.min.js"></script>
<script src="social-likes.min.js"></script>
<title></title>

<style type="text/css">
textarea{ 
  width: 300px; 
  min-width:300px; 
  max-width:300px; 

  height:100px; 
  min-height:100px;  
  max-height:100px;
}
  ul.nav li.dropdown:hover > ul.dropdown-menu{
    display: block;    
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
#main-content
	{

		padding-top: 70px;
	}
	#about
	{
		padding-top: 40px;
	}
#home
{
	padding-top: 50px;
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
/*background:url(img/bg.jpg);*/
background-color: #F7F7F6;
  font-family:Arial, Helvetica, sans-serif;
  color:000;
  font-size:12px;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
	}
body.element{
	position: absolute;
	bottom: 0;
}
body >.element{
	position: fixed;
}
.nav.body{
  width: 100%;
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

.hide{
	display: none !important;
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
     <li class=""><a href="index.php">Home</a></li>

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
    <li class="divider-vertical"></li>
   <li class="active"><a href="contact.php">Contact</a></li>
    </ul>
    </div>
    </div>
    </nav>
  </div>
</header>

<div class="row" id="main-content">

<div class="span12" id="contact">
<div class="well" style="background:white;">
<div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Find <strong>wea group</strong></h2>
            <hr>
          </div>
          <div class="col-md-8">
            <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
            <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=0.5470573,34.0201552&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
          </div>
          <div class="col-md-4">
            <p>Phone: <strong>+256787261312,+256703744226</strong></p>
            <p>Email: <strong>weatechgroup@gmail.com</strong></p>
           <!--  <p>Address: <strong>The Plaza<br>5483 Start Bootstrap Ave.<br>Beverley Hills, CA 26829</strong></p> -->
          </div>
          <div class="clearfix"></div>

           <!--   <form align="center" method="post" action="">
            <legend>Leave a comment:</legend>
            <input type="text"  name ="fullname"placeholder="Full name">
            <input type ="email" name="email" placeholder="E-mail address">
            <label align="center">message</label>
            <textarea name="msg"></textarea>
            <br/>
            <input class="btn btn-primary btn-large"type="submit" name="submit" value="send message">
           <input type="reset" value="clear"> 
          </form>'; -->
          <!-- start contact -->
<script data-sil-id='d51e07a0-7a0f-11e3-b73f-bbbed4752945'> (function() { var u='http://htmlcontactbox.com/widget/contact/d51e07a0-7a0f-11e3-b73f-bbbed4752945?page=',e,s=document.createElement("script"); s.type="text/javascript"; s.src=u+encodeURIComponent(window.location+''); s.async=true; e=document.getElementsByTagName("script");e=e[e.length-1]; e.parentNode.insertBefore(s, e); })(); </script><link rel="stylesheet" type="text/css" href="http://htmlcontactbox.com/bootstrap/css/bootstrap-widget.css" />
<div class='sil-widget-contact sil-widget' id='sil-widget-d51e07a0-7a0f-11e3-b73f-bbbed4752945'><a href='http://htmlcontactbox.com'>HTML Contact Box is loading <img class='sil-loading' src='http://htmlcontactbox.com/loading.gif'/>.</a></div>
<!-- end contact -->
<h4><strong>give us feedback</strong></h4>
  <a target="_blank" href="https://weatechnologies.launchrock.com/">sign up</a>       
         
</div>
</div>

</div><!-- end main contant-->
<div id="push"></div>

</div><!--main-container-->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- <div id="footer">
    <div class="container">
     <p>© Copyright 2013 <a href="#">iAlert.com</a> All Rights Reserved | powered by 
      </p>
<a class="btn btn-social-icon btn-facebook">
    <i class="fa fa-facebook"></i></a>
    <a class="btn   btn-social-icon btn-twitter">
    <i class="fa fa-twitter"></i></a>
    <a class="btn btn-social-icon  btn-google-plus">
    <i class="fa fa-google-plus"></i></a>
      </div>
    </div> -->
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
