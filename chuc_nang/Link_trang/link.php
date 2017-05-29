<?php
	$sql = "SELECT *FROM duongdan_trangngoai";
	$query = mysql_query($sql);
	while($fetch = mysql_fetch_array($query))
	{
		if($_GET['thamso'] == $fetch['ten_tham_so'])
		{
			include($fetch['duong_dan']);
		}
	}
?>