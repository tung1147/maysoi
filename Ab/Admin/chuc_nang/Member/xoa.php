<?php
	echo $_GET['id'];
	$chuoi="DELETE  FROM thanh_vien WHERE  thanh_vien.id = '$_GET[id]' LIMIT 1";
	mysql_query($chuoi);
?>