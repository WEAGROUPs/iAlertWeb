<?php include("includes/config.php");?>
<?php
// require('config.php');

$deleteid=$_GET['id'];

$del="DELETE FROM comments WHERE id='$deleteid'";

$res = mysql_query($del);

echo '<script> document.location.href="success.php";</script>';

// echo '<script>document.href:ndex.php</script>';

// echo 'delete successfull';

?>