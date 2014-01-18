<?php include("includes/config.php");

if(isset($_POST["edit"]))
{
$title=$_POST["title"];
$details=$_POST["details"];
$id=$_POST["id"];
$sql="update news set title='{$title}' , description='{$details}' where id={$id}";
if(mysql_query($sql))
{
//echo"news updates sucessfully";	
}
}

?>

<?php

if(isset($_POST["update"]) && $_POST["update"]=="Approve" && $_POST["id"]!="")
{
	$id=$_POST["id"];
	$sql_up="UPDATE news set check1=1 where id={$id}";
	if(mysql_query($sql_up))
	{
		
	/////////////////////////////////////////	
		
		
	   $seln="select * FROM news WHERE id=$id"; 

			
//$resx="insert into test (id ,name) values ('$var1','$var2')";
$ee=mysql_query($seln);

	    	 //$query1=msql_query("select * from news");
	    	 if (!$ee) {
				 
				  } 
	    	    
	    	    else{
	    	    
	    	     		 $r = mysql_num_rows($ee );  //rows
	    	    	     $f = mysql_num_fields($ee); //fields
	    	    
	    	    				 
	    	    	 		$col=mysql_fetch_array($ee);
	    	     
	    	     $id=$col["id"];
	    	     $agent_id=$col["agent_id"];
	    	     $sendername=$col["sender_name"];
	    	     $face_image=$col["face_image"];
	    	     $other_attachments=$col["other_attachments"];
	    	     $sender_contact=$col["sender_contact"];
	    	     $description=$col["description"];
				 $category=$col["cat_id"];
				 $video=$col["video"];
				 $audio=$col["audio"];
				 $title=$col["title"];
				 $timendate=$col["timendate"];
	    	    		 
	    	    $det= $_POST["details"]; 
				  $titl= $_POST["title"]; 
	    	     
	    	    
	    	    
				
				
	    	     $insx="INSERT into updates(description,sendername,agent_id,face_image ,other_attachments,title,video,audio,category_id) values ('$det','$sendername',$agent_id,'$face_image','$other_attachments','$titl','$video','$audio','$category')";
				  //$insx="INSERT into updates(id,description,sendername,agent_id,face_image,other_attachments) values ('23','fghjkjhvyvyuinnkijbubi','$james',45,'/images/thumb8.jpg','/bj/hjk' )";
				
				$res_in=mysql_query($insx); //running query to insert values into the updates table
	    	 	if (!$res_in){ echo "</br>"."News not posted please try again";}
	    	 	else{      
	    	
			$val=1;
			
			echo'News Verified sucessfully';	 
			
			
			
			
		
		
			}
		
			}
		
		
	/////////////////////////////	
		
	
		
	}
	
	
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>iAlert - Received news</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link rel="stylesheet"  href="css/bootstrap.min.css" media="screen">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" media="screen">
  <link href='./img/favicon.ico' rel='icon' type='image/x-icon'/>
  <script type="text/javascript" src="jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="jwplayer/jwplayer.js"></script><!-- this is jplayer script-->
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
legend{

  text-align: center;
  color: red;
}
</style>
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
/*
$(".edit").click(function(){
var idno=$(this).attr("id");

$.post("edit.php")
{
  task : "Editing part",
  track_id : idno
}

  ).success(function(data){

  });

});*/

  });
</script>
</head>
<body>
<!-- Navigation Bar -->
<?php
  echo '$_GET["job"]';
?>
<?php

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
   <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon icon-user icon-white"></i>'.$_SESSION["name"].'<b class="caret"></b></a>
    <ul class="dropdown-menu">
	 <li><a href="#">My profile</a></li>
	<li><a href="#forgot" data-toggle="modal"><i class="icon-user icon-white"></i> Change Password</a></li>
	  <li><a href="admin.php?lg=1">Logout</a></li>
    </ul>
    </li>
      </ul>
    </div>
 <div class="nav-collapse collapse">
 <ul class="nav">
<li class=""><a href="home.php">Home</a></li>
<li><a href="Users.php">Users</a></li>
 <li class="divider-vertical"></li>
 <li class="divider-vertical"></li>m
 </ul>
 </div>
    </div>
  </div>
</div>' ;
  }
  elseif($_SESSION["jobs"]==2)
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
   <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon icon-user icon-white"></i>'.$_SESSION["name"].'<b class="caret"></b></a>
    <ul class="dropdown-menu">
     <li><a href="admin.php?lg=1">Logout</a></li>
    </ul>
    </li>
      </ul>
    </div>
 <div class="nav-collapse collapse">
 <ul class="nav">
<li class=""><a href="home.php">Home</a></li>
<li><a href="Users.php">Users</a></li>
 <li class="divider-vertical"></li>
 <li class="divider-vertical"></li>
 </ul>
 </div>
    </div>
  </div>
</div>' ;
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
   <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon icon-user icon-white"></i>'.$_SESSION["name"].'<b class="caret"></b></a>
    <ul class="dropdown-menu">
    <li><a href="#">my profile</a></li>
    <li><a href="#forgot" data-toggle="modal"><i class="icon icon-lock"></i>change Password</a></li> 
     <li><a href="admin.php?lg=1">Logout</a></li>

    </ul>
    </li>
      </ul>
    </div>
 <div class="nav-collapse collapse">
 <ul class="nav">
<li class=""><a href="home.php">Home</a></li>
 <li class="divider-vertical"></li>
 </ul>
 </div>
    </div>
  </div>
</div>' ;
  }
?>

<!-- Navigation Ends -->
 
<!-- Main Container -->
<div class="container" style="margin-top:20px;">
<section   >
  <div class="container" style="padding-top:20px;" >
<div class="row">
<legend>Received News[Images]</legend>

 <table class="table table-bordered table-responsive" width="100%" style="margin-top:50px;">
    <thead>
        <tr>
          <th>image</th>
            <th>title</th>
            <th>descritption</th>
            <th>sender name</th>
            <th>receivers name</th>
            <th>contact</th>
            <th>time</th>
             <th>Latitude</th>
             <th>Logitude</th>
              <th>category</th>
               <th>Video</th>
            <!--  <th>Attached Video</th>
             <th>Attached Audio</th> -->
            <th>Actions</th>

        </tr>
    </thead>
    <?php
        $query = "SELECT n.agent_id,n.title,n.face_image,n.description,n.sender_name,n.sender_contact,n.timendate,n.lat,n.long1,c.name,n.id as nid FROM news n inner join category c on (n.cat_id=c.id) where n.check1= 1";
$names="Undefined";
        $result = mysql_query($query);
        $i=1;
        while($row = mysql_fetch_array($result))
        {
			$aid=$row['agent_id'];
	$ss="select * from users where id={$aid}";
	$res=mysql_query($ss);
	if($res)
	{
	$rws=mysql_num_rows($res);
	if($rws>=1)
	{	
	$rw=mysql_fetch_array($res);	
	
	$names=$rw["fname"]." ".$rw["lname"];
	$name=$rw["video"];
	    $path="ialert/video_uploads/$name";
	}
	
	else
	{
	$names="";		
	}
	}
		$name=$row["video"];
	    $path="ialert/video_uploads/$name";	
    ?>
    <form method="POST" action="News.php" >
      <tr>
      <input type="hidden" name="id" value="<?php echo $row['nid']; ?>"  />
    <?php $rowID = $row['title']; ?>
     <td><?php echo '<img  width="150px" height="150px"src="ialert/image_uploads/'.$row['face_image'].'"'?></td>
     <td><input type="text" name="title" value="<?php echo $row['title']; ?>"  /> </td>
     <td> <input  type="text"  name="details" value="<?php echo $row['description']; ?>"  /> </td>
     <td><?php echo $row['sender_name']; ?></td>
      <td><?php echo $names; ?></td>
     <td><?php echo $row['sender_contact']; ?></td>
     <td><?php echo $row['timendate']; ?></td>
     <td><?php echo $row['lat']; ?></td>
     <td><?php echo $row['long1']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <?php
	$tk=0;
    if($row['video']!="")
    {

$tk=1;
     }
	 
	 ?>
    
     <td><?php if( $tk==1  ) { echo '<a class="btn update btn-inverse" href="player_src.php?path='.$path.'"  data-toggle="modal">Play Video</a>';} 
	 else{
		 echo 'no video:';
		 }?></td>
    
                <td style="text-align: center">
                    <div class="btn-toolbar">
                        <div class="btn-group">
                        <?php
                       
                        ?>
                        <?php 
 $job=$_SESSION["jobs"];



 if($_SESSION["jobs"]==1) { 
 echo' <a class="btn btn-danger" href="#delModal"  data-toggle="modal"><i class="icon-trash icon-white"></i>Delete</a>
                            <input name="edit" type="submit" class="btn  btn-success" value="edit" />
							 <input name="update" type="submit" class="btn  btn-success" value="Approve" />
                            ';   

                        } 
          else if($_SESSION["jobs"]==2)
                  {
                    echo' <a class="btn btn-danger" href="#delModal"  data-toggle="modal"><i class="icon-trash icon-white"></i>Delete</a>
                            <a class="btn  btn-success" href="#editModal"  data-toggle="modal"><i class="icon icon-pencil"></i>Edit</a>
                            <a class="btn update btn-inverse" href="#approve"  data-toggle="modal">Approve</a>';   
                }
                else{
                  echo'<a class="btn  btn-success" href="#editModal"  data-toggle="modal"><i class="icon icon-pencil"></i>Edit</a>
                           ';   
                }
?> 

</form>
                             </div>
                    </div>
                </td>
             </tr>
     <?php $i++; } ?>
 </table>
          
  </div>
</section>
<section   >
  <div class="container" style="padding-top:20px;" >
<div class="row">
<legend>Received News[Videos and audio files]</legend>

 <table class="table table-bordered table-responsive" width="100%" style="margin-top:50px;">
    <thead>
            <tr>
              <th>Videos</th>
              <th>Audio</th>
              <th>time</th>
              <th>category</th>
            <!--  <th>Attached Video</th>
             <th>Attached Audio</th> -->
            <th>Actions</th>

        </tr>
    </thead>
    <?php
        $query = "SELECT * FROM news n inner join category c on (n.cat_id=c.id) where n.check1= 1";

        $result = mysql_query($query);
        $i=1;
        while($row = mysql_fetch_array($result))
        {
    ?>
      <tr>
     <td><?php echo $row['video'];?></td>
     <td><?php echo $row['audio']; ?></td>
     <td><?php echo $row['timendate']; ?></td>
    <td><?php echo $row['name']; ?></td>
                <td style="text-align: center">
                    <div class="btn-toolbar">
                        <div class="btn-group">
                        <?php
                        //echo $_GET["job"];
                        ?>
                        <?php

                         $job=$_SESSION["jobs"];

                         if($job==1)

                         { echo' <a class="btn btn-danger" href="#delModal"  data-toggle="modal"><i class="icon-trash icon-white"></i>Delete</a>
                            <a class="btn  btn-success" href="#editModal"  data-toggle="modal"><i class="icon icon-pencil"></i>Edit</a>
                            <a class="btn update btn-inverse" href="#approve"  data-toggle="modal">Approve</a>';   

                        } 
          elseif($job==2)
                  {
                    echo' <a class="btn btn-danger" href="#delModal"  data-toggle="modal"><i class="icon-trash icon-white"></i>Delete</a>
                            <a class="btn  btn-success" href="#editModal"  data-toggle="modal"><i class="icon icon-pencil"></i>Edit</a>
                            <a class="btn update btn-inverse" href="#approve"  data-toggle="modal">Approve</a>';   
                }
                else{
                  echo'<a class="btn  btn-success" href="#editModal"  data-toggle="modal"><i class="icon icon-pencil"></i>Edit</a>
                           ';   
                }
?> 
                             </div>
                    </div>
                </td>
             </tr>
     <?php $i++; } ?>
 </table>
          
  </div>
</section>

</div>
<!-- change password Model Box -->

<div id="forgot" class="modal hide fade in" style="display: none; ">
<div class="modal-header">
<a class="close" data-dismiss="modal">×</a>
<h3>Change Password</h3>
</div>
<div class="modal-body">

<form>
      <div class="controls controls-row">
          <input id="name" name="name" type="password" class="input-block-level" placeholder="Old password" />
          <input type="password" name="pass" class="input-block-level" placeholder="new Password">
          <input type="password" name="pass1" class="input-block-level" placeholder=" Confirm New Password">
      </div>
 
</form>
</div>
<div class="modal-footer">
<a href="#" class="btn btn-primary">Save Changes</a>
<a href="#" class="btn btn-danger" data-dismiss="modal">Cancel</a>
</div>
</div>
<!--my profile modal box-->

<!-- Main Container Ends -->
<!-- JavaScript -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>