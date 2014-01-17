<?php include("includes/config.php");?>

 <?php

//journalist's user information
if(isset($_POST["submit"]) && $_POST["submit"]!="")
{

$fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email =$_POST['email'];
    $password =$_POST['passwd'];
    $job =$_POST['jobs'];
     $phone =$_POST['phone_number'];


    $reg ="INSERT INTO users (fname,lname,job,email,password,phone_number) VALUES ('{$fname}','{$lname}',{$job},'{$email}','{$password}','{$phone}')";


//Query scrpit to inform user that registration was successfull
if(mysql_query($reg))
{

echo"User registered sucessfully";

}
else
{

  echo"User registration failled please try again";

}

}

    


  ?>
  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>iAlert - User Management</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link rel="stylesheet"  href="css/bootstrap.min.css" media="screen">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" media="screen">
  <link href='./img/favicon.ico' rel='icon' type='image/x-icon'/>
  <script type="text/javascript" src="jquery-1.10.2.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
<!-- StyleSheet -->
<!-- <link rel="stylesheet" href="css/bootstrap-responsive.css" /> -->
<link rel="stylesheet" href="css/custom.css" />
<style type="text/css">
  body{background-color: #F7F7F6; }
.login{padding-top: 65px;}
.center{float: none; margin-left: auto; margin-right: auto;
  margin-top: 20px;
}

</style>
<script type="text/javascript">
function validate()
{


//var pass01=document.getElementById("pass1");

//alert(pass01);
if(document.getElementById("pass1").value=='' || document.getElementById("pass2").value=='')
{

alert("please enter password ");


return false;
}


else 
{
var p1=document.getElementById("pass1").value ;
var p2=document.getElementById("pass2").value;

if(p1!=p2)
{
alert("Pasword mismatch ");

return false;

}


}

return true;
}

</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#sec').hide();
     $('#Roles').hide();
     $('#tab').show();
$('a#user').click(function(){
 $('#sec').show('slow','linear');
 $('#tab').hide('slow','linear');
 $('#Roles').hide('slow','linear');
});
$('a#details').click(function(){
$('#sec').hide('slow','linear');
 $('#tab').show('slow','linear');
  $('#Roles').hide('slow','linear');
});

$('a#ro').click(function(){

  $('#Roles').show('slow','linear');
  $('#sec').hide('slow','linear');
 $('#tab').hide('slow','linear');

});


  });
</script>
</head>
<body>
<!-- Navigation Bar -->
<div class="navbar navbar-inverse navbar-fixed-top" >
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
        <!-- <ul class="nav">
            <li><a href="#forgot" data-toggle="modal"><i class="icon-user icon-white"></i> Forgot Password</a></li>
            <li class="divider-vertical"></li>
            <li><a href="#contact" data-toggle="modal"><i class="icon-envelope icon-white"></i> Contact Us</a></li>
            <li class="divider-vertical"></li>
            
        </ul> -->
    </div>
 <div class="nav-collapse collapse">
 <ul class="nav">
<li ><a href="home.php">Home</a></li>
<li class="dropdown">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Users<b class="caret"></b></a>
    <ul class="dropdown-menu">
      <li><a id="user" href="#sec">New User</a></li>
     <li class="divider"></li>
     <li><a id="details" href="#tab">Manage Users</a></li>
    </ul>
</li>
 <li class="divider-vertical"></li>
<li class="dropdown">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Roles<b class="caret"></b></a>
    <ul class="dropdown-menu">
     <li><a  id="ro"href="#Roles">Manage Roles</a></li>
    </ul>
</li>
 <li class="divider-vertical"></li>
 </ul>
 </div>
    </div>
  </div>
</div>
<!-- Navigation Ends -->
 
<!-- Main Container -->
<div class="container" style="margin-top:20px;">
<section   >
  <div class="container" style="padding-top:20px;" >
<div class="row">
 <div class="center span4 well" id="sec">
         
         <legend>New User Registration</legend>

            <form method="POST" action="" accept-charset="UTF-8">
            <input type="text" id="username" class="input-block-level" name="fname" placeholder="First Name" />
             <input type="text" id="username" class="input-block-level"  name="lname" placeholder="Last Name" />
              <input type="email" id="username" class="input-block-level"  name="email" placeholder="E-email address" />
              <input type="text" id="username"  class="input-block-level" name="phone_number" placeholder="start with 256" />
              <input type="password" id="pass1" class="input-block-level"  name="passwd" placeholder="Password" />
              <input type="password" id="pass2" class="input-block-level"  name="confirmpasswd" placeholder="confirm password" />
              <select class="selectpicker input-block-level" name="jobs" >
              <!--   <option value="1" >Admin</option> -->
                 <option value="2">Modulator</option>
                <option value="3" >Journalist</option>
              </select>

            <!--   <label class="checkbox">
                <input type="checkbox" name="remember" value="1" /> Active?
            </label -->
            <button type="submit" name="submit" class="btn btn-success" value="submit"  onclick="return validate();" class="btn btn-primary">Save User</button>
            <button type="submit" name="danger" class="btn btn-danger pull-right ">Close</button>
            </form>
        </div>
</div>
  </div>
</section>
<section>
  <div class="container">
  <div class="row">
  <div class="center span8 well" id="tab" style="border:0px;">
  <legend align="center">All Users</legend>
  
<table class="table table-bordered">
    <thead>
        <tr><th>id</th>
            <th>First Name</th>
            <th>Last Name</th>
             <th>job id</th>
            <th>Email Addres</th>
            <th>password</th>
            <th>Phone</th>
            <th>Status</th>
        </tr>

  <?php
  $Users ="SELECT * FROM users";

  $res = mysql_query($Users);
  if($res){

    while ($r=mysql_fetch_array($res)) {
      # code...

    
  
  ?>
        <tr>
          <td><?php echo $r['id'];?></td>
           <td><?php echo $r['fname'];?></td>
          <td><?php echo $r['lname'];?></td>
          <td><?php echo $r['job'];?></td>
          <td><?php echo $r['email'];?></td>
          <td><?php echo $r['password'];?></td>
          <td><?php echo $r['phone'];?></td>
          <td><h6 class="label">Active</h6></td>
           <td><div class="btn-group">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        Action <span class="caret"></span>
     </button>
      <ul class="dropdown-menu" role="menu">
    <li><a href="#"><i class="icon icon-pencil"></i>Edit</a></li>
    <li><a href="#"><i class="icon icon-remove"></i>Delete</a></li>
  <!--   <li><a href="#"><i class="icon icon-user"></i>Details</a></li> -->
    <li class="divider"></li>
    <li><a href="#"><i class="icon icon-lock"></i>Make Admin</a></li>
    <li><a href="#"><i class="icon icon-lock"></i>Make User</a></li>
  </ul>
</div></td>
           <?php
            }
            }
           ?>
 
        </tr>
    </thead>
</table>
  </div>
  </div>
  </div>
</section>
<section>
  <div class="container">
  <div class="row">
  <div class="center span8 well" id="Roles" style="border:0px;">
  <legend align="center">Roles</legend>
<table class="table table-bordered">
    <thead>
        <tr><th>id</th>
            <th>Role</th>
        </tr>
<?php

$roles ="SELECT * FROM jobs";

$res =mysql_query($roles);
if($res)
{
while ($row=mysql_fetch_array($res)) {
?>
 
  <tr>
          <td><?php echo $row['id'];?></td>
           <td><?php echo $row['name'];?></td>
          <td>
    <div class="btn-group">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
    Action <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#"><i class="icon icon-pencil"></i>Edit</a></li>
    <li><a href="#"><i class="icon icon-remove"></i>Delete</a></li>
  </ul>
</div></td>
        </tr>
        <?php
}
}

?>
        

    </thead>
</table>
  </div>
  </div>
  </div>
</section>

</div><!--End of main container-->


<!-- JavaScript -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
