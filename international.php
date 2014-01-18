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
 <link rel="stylesheet" href="social-likes.css">
 <link rel="stylesheet" type="text/css" href="social-buttons.css">
  <link rel="stylesheet" type="text/css" href="http://www.htmlcommentbox.com/static/skins/default/skin.css" />
 <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet" />
<link href="//netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet" />
<link href='./img/favicon.ico' rel='icon' type='image/x-icon'/>
<script src="jquery.min.js"></script>
<script src="social-likes.min.js"></script>
 
<title></title>
<style type="text/css">
  .nav{

  font: 50px ;
   font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
     color: #000;
      font-size: 18px;
}


 textarea{ 
  width: 255px; 
  min-width:255px; 
  max-width:255px; 

  height:100px; 
  min-height:100px;  
  max-height:100px;
}
#seatrch
{

padding:10px;
margin-top: 10px;

}
  ul.nav li.dropdown:hover > ul.dropdown-menu{
    display: block;    

}
/* fix space */
.navbar .dropdown-menu {
 margin-top: 0px;
}
  #main-content
  {

    padding-top: 70px;
  }
  .form-search
{
  padding-top: 10px;
  padding-right: 20px;
}
#footer1 {
  height: 60px;
  background-color: #f5f5f5;
    background:url(img/footer.png);
    color: white;
    text-align: center;
}

.container .text-muted {
  margin: 20px 0;
}

.container{
  margin-top: 100px;
}

  body{
     padding-top: 100px; 
         background-repeat:no-repeat;
         background-size:100%;
    height: 100%;
    display: block;
    background-attachment: fixed;
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
  background-attachment: fixed;
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
  text-align: center;
}
.container .text-muted {
  margin: 20px 0;
}

#footer1 {
  height: 60px;
  background-color: #f5f5f5;
  text-align: center;
}
.media-object
{
  height: 250px;
  width: 250px;
  border:1px solid grey;
}
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
      .center h1 {display: block; }

.center img {margin: 0 10px; vertical-align: middle;}
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
<!--lest commence searching-->
<script type="text/javascript">
$(document).ready(function(){

var term =$(this).val();

$.post('search.php',{term :term},function(data){

  $('#search_results').html(data);
});
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
     <li class="active"><a href="international.php">International</a></li> 
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
<form action='search.php' method='GET' class="form-search pull-right " >
<input type='text'class="search-query" ame='search' placeholder ="Enter key word">

</form>
    </div>
    </div>
    </nav>

  </div>
</header>

<div class="row" id="main-content"  style="  background:white; margin-top:70px;margin-bottom:10px;">
<div class="span8" style="margin-top:-30px; background:white; margin-bottom:10px;">

<h5 align="center" style="color:red;"><strong>Latest in politics</strong></h5>
<hr/>
<div class="row">  
 <?php
$sql="SELECT * FROM updates where category_id =7  order by id desc";

$res =mysql_query($sql);
  

  if($res){
  $data =mysql_num_rows($res);
  if($data==0)
  {
    echo '<h4 align="center">'."Nothing is available in the database:".'</h4>';
  }

else
{
  while($row =mysql_fetch_array($res))
  {
    echo '<div class="span4">
    <h4>'.$row["title"].'</h4>
  <img  style="width:350px; height:250px; "clas="imag" src= "ialert/image_uploads/'.$row["face_image"].'" alt="">
  <p><strong>'.$row["description"].'</strong></p> <a class="label" id="details" href="#"> more details>></a><br/>
  </div>

  ';
  }
  }
}


?>
 
</div> 

</div>

<div class="span4"  id="sidebar"style="margin-top:-20px;   background:white; margin-bottom:10px; height:auto;">
<legend>Recently Fetured News</legend>
</div>


</div><!--end of main content-->

<div id="push"></div>

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
