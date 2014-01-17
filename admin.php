<?php include("includes/config.php");
if(isset($_REQUEST["lg"]) && $_REQUEST["lg"]==1)
{
$_SESSION["jobs"]="";
$_SESSION["email"]="";
$_SESSION["name"]="";	
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>iAlert - Admin Login</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link rel="stylesheet"  href="css/bootstrap.min.css" media="screen">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" media="screen">
  <link href='./img/favicon.ico' rel='icon' type='image/x-icon'/>
<!-- StyleSheet -->
<!-- <link rel="stylesheet" href="css/bootstrap-responsive.css" /> -->


<link rel="stylesheet" href="css/custom.css" />

<style type="text/css">
  body{background-color: #F7F7F6;
  background:#222222 url('http://www.aafrin.com/wp-content/themes/Avenue/images/patterns/pattern10.png') repeat; }
.login{padding-top: 65px;}
.center{float: none; margin-left: auto; margin-right: auto;
}

.nav
{
  font: 140px;
}
</style>
</head>
<body>
<!-- Navigation Bar -->
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
 
            </a>
 
    <a href="#" class="brand">iALert</a>
 
    <div class="nav-collapse collapse pull-right">
        <ul class="nav">
          <!--   <li><a href="#forgot" data-toggle="modal"><i class="icon-user icon-white"></i> Forgot Password</a></li> -->
           <!--  <li class="divider-vertical"></li> -->
            <li><a href="#contact" data-toggle="modal"><i class="icon-envelope icon-white"></i> Contact Us</a></li>
            <li class="divider-vertical"></li>
 
        </ul>
    </div>
 
    </div>
  </div>
</div>
<!-- Navigation Ends -->
 
<!-- Main Container -->
<section>
<div class="container login">
    <div class="row ">
        <div class="center span4 well">

        <?php
          require'core.inc.php';

          // $connect = mysql_connect("localhost","root","");
          // if(!$connect || !mysql_select_db("ialert_db",$connect)) 
          //   die(mysql_error());
          // else{
            if(isset($_POST['fname']) && isset($_POST['password'])){

                $fname = $_POST['fname'];

                $password = $_POST['password'];
            
                if(!empty($fname) && !empty($password)){
                
                  $query = "SELECT * FROM users  WHERE email = '{$fname}' AND password = '{$password}'";
                 if( $resultset = mysql_query($query)){
                    
                    $querynumrows = mysql_num_rows($resultset);
                                         
                    if($querynumrows == 0){
                  echo '<div class="alert alert-danger alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Error!</strong> Incorrect email address or password ,please check and try again.
                    </div>';
                    }

                    elseif($querynumrows >= 1)
                    {
                      $r=mysql_fetch_array($resultset);
                      $job=$r["job"];
					  $name=$r["fname"]." ".$r["lname"];

                      $_SESSION["jobs"]=$r["job"];
					   $_SESSION["name"]=$name;
                      echo '<script>document.location.href="News.php?job='.$_session["jobs"].'";</script>';

                    }
                    }
                      }
                          
                 else
                      
                    {
                        echo '<div class="alert alert-warning alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Warning!You must supply email and password please:</strong> .
                    </div>';


                    }

            
  
  }

        ?>
            <legend>Please Sign In</legend>
      
            <form action="<?php echo $current_file;?>"  method="POST" accept-charset="UTF-8">
            <input type="text" id="fname" class="span4" name="fname" placeholder="Enter email address " />
            <input type="password" id="password" class="span4" name="password" placeholder="Password" />
            <!-- <select class="selectpicker" data-style="btn-primary">
            <optgroup label="Role">
            <option>Admin</option>
            <option>Modulator</option>
            <option>Journalist</option>  
           
        </optgroup>
          </select> -->
            <label class="checkbox">
                <input type="checkbox" name="remember" value="1"/> Remember Me
            </label>
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-large">Sign in</button>
            </form>
        </div>
    </div>
</div>
<p class="text-center muted ">&copy; Copyright 2013 - iAlert</p>
</section>
<!-- Main Container Ends -->
 
<!-- Forgot Password Model Box -->
<div id="forgot" class="modal hide fade in" style="display: none; ">
<div class="modal-header">
<a class="close" data-dismiss="modal">×</a>
<h3>Forgot Password</h3>
</div>
<div class="modal-body">
<p>Enter your first to reset the password</p>
<form>
      <div class="controls controls-row">
          <input id="name" name="name" type="text" class="span3" placeholder="Name" />
      </div>
 
</form>
</div>
<div class="modal-footer">
<a href="#" class="btn btn-primary">Submit</a>
<a href="#" class="btn btn-danger" data-dismiss="modal">Close</a>
</div>
</div>
 
<!-- Contact Us Model Box -->
<div id="contact" class="modal hide fade in" style="display: none; ">
<div class="modal-header">
<a class="close" data-dismiss="modal">×</a>
<h3>Contact Us</h3>
</div>
<div class="modal-body">

<form>
      <div class="controls controls-row">
          <input id="name" name="name" type="text" class="span3" placeholder="Name" />
      </div>
 
       <div class="controls controls-row">
       <input id="email" name="email" type="email" class="span3" placeholder="Email address" />
       </div>
 
      <div class="controls">
          <textarea id="message" name="message" class="span5" placeholder="Your Message" rows="5"></textarea>
      </div>
 
  </form>
</div>
 
<div class="modal-footer">
<a href="#" class="btn btn-primary">Submit</a>
<a href="#" class="btn  btn-danger" data-dismiss="modal">Close</a>
</div>
</div>
 
<!-- JavaScript -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
