
<?php
$path=$_GET["path"];

echo'<table border="0" align="center" cellpadding="0" cellspacing="3" style="background-color: #35679a; color: #356795"><tr>
<td><IFRAME src="player.php?name='. $path.'" width="280" height="256" scrolling="no" frameborder="0">[Your browser does not support frames or is currently configured not to display frames. Please use an up-to-date browser that is capable of displaying frames.]</IFRAME></td>
</tr></table>';
?>