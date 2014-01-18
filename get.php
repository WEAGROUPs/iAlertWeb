<?php include("includes/config.php");?>

<?php

//get the q parameter from URL
$hint="";
$q=$_GET["q"];
if (strlen($q)>0)
{
$res=mysql_query("SELECT * FROM news WHERE title LIKE '%$q%'");

while($serresult=mysql_fetch_array($res))
{
$hint='<a><div>'.$serresult['title'].'</div></a>';
}
}

// Set output to "no suggestion" if no hint were found
// or to the correct values

if ($hint=="")
{
$response="no suggestion";
}
else
{
$response=$hint;
}
//output the response
echo $response;
