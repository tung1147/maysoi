<?php
	$id = $_GET['id'];
	$delete = "DELETE FROM menu WHERE menu.id='$id' LIMIT 1";
	mysql_query($delete);
?>