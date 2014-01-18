<?php include("includes/config.php");?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>iAlert -Admin Home</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link rel="stylesheet"  href="css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" media="screen">
  <link href='./img/favicon.ico' rel='icon' type='image/x-icon'/>
  <link rel="stylesheet" type="text/css" href="social-buttons.css">
  <script type="text/javascript" src="jquery-1.10.2.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
<!-- StyleSheet -->
<!-- <link rel="stylesheet" href="css/bootstrap-responsive.css" /> -->
<link rel="stylesheet" href="css/custom.css" />
<style type="text/css">
  body{background-color: #F7F7F6; 
 /* background:#222222 url('http://www.aafrin.com/wp-content/themes/Avenue/images/patterns/pattern10.png') repeat; */
}
.login{padding-top: 65px;}
.center{float: none; margin-left: auto; margin-right: auto;
  margin-top: 20px;
}
.span12{
  background:white;
}
legend{
  text-align: center;

}
.imag
{

  height: 150px;
  width: 250px;
  border:2px solid grey;
}

p{
  text-align:left;
}
h4
{
  text-align: center;
  color: blue;
}
.text-muted
{

  text-align: center;
  margin-top: 100px;
  background-color:rgba(255,0,0,0.3);
}
#push,
  #footer {
    height: 60px;
    text-align: center;
     width: 100%;
     background-color: #F8F8F8 ;

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
  $(document).ready(function(){
      $('#pol').show();
     $('#biz1').hide();
     $('#local').hide();
      $('#edu').hide();
     $('#inter').hide();
     $('#ent1').hide();
     $('#sport1').hide();
     $('#health1').hide();
$('a#poli').click(function(){
      $('#pol').show('slow','linear');
      $('#biz1').hide();
     $('#local').hide();
    $('#edu').hide();
     $('#inter').hide();
     $('#sport1').hide();
     $('#ent1').hide();
    $('#health1').hide();
  
});
$('a#bizz').click(function(){
    $('#pol').hide();
      $('#biz1').show();
     $('#local').hide();
      $('#edu').hide();
     $('#inter').hide();
     $('#sport1').hide();
      $('#ent1').hide();
     $('#health1').hide();
});
$('a#loca').click(function(){
    $('#pol').hide();
      $('#biz1').hide();
     $('#local').show();
      $('#edu').hide();
     $('#inter').hide();
     $('#sport').hide();
      $('#ent1').hide();
      $('#health1').hide();
});

$('a#educa').click(function(){
    $('#pol').hide();
      $('#biz1').hide();
     $('#local').hide();
      $('#edu').show();
     $('#inter').hide();
     $('#sport1').hide();
      $('#ent1').hide();
      $('#health1').hide();
});

$('a#health').click(function(){
    $('#pol').hide();
      $('#biz1').hide();
     $('#local').hide();
      $('#edu').hide();
     $('#inter').hide();
     $('#sport1').hide();
      $('#ent1').hide();
    $('#health1').show();
});
$('a#in').click(function(){
    $('#pol').hide();
      $('#biz1').hide();
     $('#local').hide();
      $('#edu').hide();
     $('#inter').show();
     $('#sport1').hide();
      $('#ent1').hide();
      $('#health1').hide();
});
$('a#life').click(function(){
    $('#pol').hide();
      $('#biz1').hide();
     $('#local').hide();
      $('#edu').hide();
     $('#inter').hide();
     $('#sport1').hide();
      $('#ent1').show();
      $('#health1').hide();
});
$('a#sports').click(function(){
    $('#pol').hide();
      $('#biz1').hide();
     $('#local').hide();
      $('#edu').hide();
     $('#inter').hide();
     $('#sport1').show();
      $('#ent1').hide();
      $('#health1').hide();
});


  });
</script>
</head>
<body>
<!-- Navigation Bar -->
<?php
$job=$_SESSION["jobs"];

if($_SESSION["jobs"]==1)
{

  echo '<div class="navbar navbar-inverse navbar-fixed-top" >
  <div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
    <a href="#" class="brand">iALert</a>
    <div class="nav-collapse collapse pull-right">
      <ul class="nav pull-right" >
      <li class="dropdown">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon icon-user icon-white"></i>Admin<b class="caret"></b></a>
    <ul class="dropdown-menu">
    <li><a href="#">My Profile</a></li>
    <li class="divider"></li>
     <li><a href="#">Logout</a></li>
    </ul>
</li>
</ul>
    </div>
 <div class="nav-collapse collapse">
 <ul class="nav">
<li class="active"><a href="#">Home</a></li>
<li><a href="News.php">Received Alerts</a></li>
<li class="dropdown">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Verified News<b class="caret"></b></a>
    <ul class="dropdown-menu">
      <li><a id="poli" href="#pol">Politics</a></li>
        <li><a id="bizz"  href="#biz1">Business</a></li>

        <li><a id="loca" href="#local">Local</a></li>

        <li><a id="educa" href="#edu">Education</a></li>

          <li><a id="health" href="#health1">Health</a></li>

        <li class="divider"></li>

      <li><a id="in" href="#inter">international</a></li>

      <li class="divider"></li>
       <li><a id="life" href="#ent1">Entertainment and life style</a></li>
       <li><a id="sports" href="#sport1">Sports</a></li>
    </ul>
</li>

 <li class="divider-vertical"></li>
 <li><a href="Users.php">Users</a></li>
 <li class="divider-vertical"></li>
 </ul>
 </div>
    </div>
  </div>
</div>

  ';

}
elseif ($_SESSION["jobs"]==2) {
  # code...
echo '<div class="navbar navbar-inverse navbar-fixed-top" >
  <div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
    <a href="#" class="brand">iALert</a>
    <div class="nav-collapse collapse pull-right">
      <ul class="nav pull-right" >
      <li class="dropdown">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon icon-user icon-white"></i>Modulator<b class="caret"></b></a>
    <ul class="dropdown-menu">
    <li><a href="#">My Profile</a></li>
    <li class="divider"></li>
     <li><a href="#">Logout</a></li>
    </ul>
</li>
</ul>
    </div>
 <div class="nav-collapse collapse">
 <ul class="nav">
<li class="active"><a href="#">Home</a></li>
<li><a href="News.php">Received Alerts</a></li>
<li class="dropdown">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Verified News<b class="caret"></b></a>
    <ul class="dropdown-menu">
      <li><a id="poli" href="#pol">Politics</a></li>
        <li><a id="bizz"  href="#biz1">Business</a></li>

        <li><a id="loca" href="#local">Local</a></li>

        <li><a id="educa" href="#edu">Education</a></li>

          <li><a id="health" href="#health1">Health</a></li>

        <li class="divider"></li>

      <li><a id="in" href="#inter">international</a></li>

      <li class="divider"></li>
       <li><a id="life" href="#ent1">Entertainment and life style</a></li>
       <li><a id="sports" href="#sport1">Sports</a></li>
    </ul>
</li>

 <li class="divider-vertical"></li>
 <li><a href="Users.php">Users</a></li>
 <li class="divider-vertical"></li>
 </ul>
 </div>
    </div>
  </div>
</div>

  ';
}
else
{

  echo '<div class="navbar navbar-inverse navbar-fixed-top" >
  <div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
    <a href="#" class="brand">iALert</a>
    <div class="nav-collapse collapse pull-right">
      <ul class="nav pull-right" >
      <li class="dropdown">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon icon-user icon-white"></i>Journalist<b class="caret"></b></a>
    <ul class="dropdown-menu">
    <li><a href="#">My Profile</a></li>
    <li class="divider"></li>
     <li><a href="#">Logout</a></li>
    </ul>
</li>
</ul>
    </div>
 <div class="nav-collapse collapse">
 <ul class="nav">
<li class="active"><a href="#">Home</a></li>
<li><a href="News.php">Received Alerts</a></li>
<li class="dropdown">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Verified News<b class="caret"></b></a>
    <ul class="dropdown-menu">
      <li><a id="poli" href="#pol">Politics</a></li>
        <li><a id="bizz"  href="#biz1">Business</a></li>

        <li><a id="loca" href="#local">Local</a></li>

        <li><a id="educa" href="#edu">Education</a></li>

          <li><a id="health" href="#health1">Health</a></li>

        <li class="divider"></li>

      <li><a id="in" href="#inter">international</a></li>

      <li class="divider"></li>
       <li><a id="life" href="#ent1">Entertainment and life style</a></li>
       <li><a id="sports" href="#sport1">Sports</a></li>
    </ul>
</li>
 </ul>
 </div>
    </div>
  </div>
</div>

  ';
}


?>

<!-- Navigation Ends -->
 
<!-- Main Container -->

<div class="container" >
<!--political section-->
<section >
  <div class="container"  >
  <div class="row" id="pol" >
 <div class=" center span12 well" style="margin-top:90px;" >
<legend>Latest in polical news</legend>
<div class="row">  

  <?php
$sql="SELECT * FROM news where cat_id =2  and check1 =1 order by id desc";

$res =mysql_query($sql);
if($res){
  while($row =mysql_fetch_array($res))
  {
echo '
    <div class="span4">
    <h4>'.$row["title"].'</h4>
  <img  style="width:350px; height:250px; "clas="imag" src= "ialert/image_uploads/'.$row["face_image"].'" alt="">
  <p><strong>'.$row["description"].'</strong></p> <a class="label" id="details" href="#"> more details>></a><br/>
  </div>

  ';
  }
}
else{
  echo'No results to display';
}
?>
    
 
</div>    

</div>
</div>
</div>
</section>
<!--political section enda-->

<!--Business section starts-->
<section>
  <div class="container"  >
<div class="row" id="biz1" >
 <div class=" center span12 well"  style="margin-top:100px;">
<legend>Latest in Business</legend>
<div class="row">  
  <?php
$sql="SELECT * FROM news where cat_id =4  and check1 =1 order by id desc";

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
  </div>
</section>
<!--Business section ends-->
<!--local news section starts-->
<section>
  <div class="container"  >
<div class="row" id="local" >
 <div class=" center span12 well"  style="margin-top:100px;">
          <legend>Latest in local news</legend>
          <div class="row">  
  <?php
$sql="SELECT * FROM news where cat_id =5  and check1 =1 order by id desc";

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
</div>
  </div>
</section>
<!--local news section ends-->
<!--education section starts-->
<section>
  <div class="container"  >
<div class="row" id="edu" >
 <div class=" center span12 well"  style="margin-top:100px;">
          <legend>Latest in education</legend>
          <div class="row">  
  <?php
$sql="SELECT * FROM news where cat_id =6  and check1 =1 order by id desc";

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
</div>
  </div>
</section>
<!--education section ends-->
<!--interanational section starts-->
<section>
  <div class="container"  >
<div class="row" id="inter" >
 <div class=" center span12 well"  style="margin-top:100px;">
          <legend>Latest in international news</legend>
         <div class="row">  
  <?php
$sql="SELECT * FROM news where cat_id =7  and check1 =1 order by id desc";

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

</div>
  </div>
</section>
<!--internatioanl section ends-->
<!--ent section starts-->
<section>
  <div class="container"  >
<div class="row" id="ent1" >
 <div class=" center span12 well" style="margin-top:100px;">
          <legend>Latest in entertainment</legend>
         <div class="row">  
  <?php
$sql="SELECT * FROM news where cat_id =1  and check1 =1 order by id desc";

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
</div>
  </div>
</section>
<!--ent section ends-->

<!--sports section starts-->
<section>
  <div class="container"  >
<div class="row" id="sport1" >
 <div class=" center span12 well"  style="margin-top:100px;">
          <legend>Latest in  sports around the world</legend>
         <div class="row">  
  <?php
$sql="SELECT * FROM news where cat_id =3  and check1 =1 order by id desc";

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
</div>
  </div>
</section>
<!--sports section ends-->

<!--health sectionn starts here-->
<section>
  <div class="container"  >
<div class="row" id="health1" >
 <div class=" center span12 well" style="margin-top:100px;">
          <legend>Welcome health section</legend>
         <div class="row">  
  <?php
$sql="SELECT * FROM news where cat_id =4  and check1 =1 order by id desc";

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
  </div>
  </div>
</section><!--health section ends here-->


<div id="footer">
<div class="container">
<p align="center" class="text-muted"> © 2013| ialert.ugisoft.com | All Rights Reserved | privacy rights | Terms and comditions</p>
</div>
</div>

<div id="push"></div>
<!-- AddThis Follow BEGIN -->
<p>Follow Us</p>
<div class="addthis_toolbox addthis_32x32_style addthis_default_style">
<a class="addthis_button_facebook_follow" addthis:userid="pages/WEA-GROUP/337837783026968"></a>
<a class="addthis_button_google_follow" addthis:userid="/u/0/104339353281233456079/posts"></a>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52d57f6d0195eba7"></script>
<!-- AddThis Follow END -->

</div><!-- Main Container Ends -->

<!-- <footer>
<div class="foot-fixed-bottom">
<div class="container">
© ialert@guigsoft.com • Uganda 2013</div>
</div>
</footer> -->

 
<!-- JavaScript -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.js"></script>


</body>
</html>