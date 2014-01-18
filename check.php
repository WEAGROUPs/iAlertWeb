<?php include("includes/config.php"); ?>
<?php
	
	
	if(isset($_POST['search_term'])){
		$search_term = $_POST['search_term'];
		if(!empty($search_term)) {
			$query = "SELECT title FROM news WHERE title LIKE '%".mysql_real_escape_string($search_term)."%' ";
			$result = mysql_query($query);
			$res_rows = mysql_num_rows($result);
			if($res_rows >= 1){
				while($rows = mysql_fetch_array($result) ) {
					echo $rows['title']."<br />";
				}
			}	
			else
				echo "no result";
		}
		else
			echo "empty";
	}
	
?>

<form action="check.php" method = "POST">
	Name: <input type="text" name = "search_term">
		<input type="submit" value = "Search" name="check">

</form>