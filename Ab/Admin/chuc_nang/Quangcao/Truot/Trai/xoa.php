<?php
	#echo "aaa";
	mysql_query("DELETE FROM quang_cao WHERE quang_cao.id='$_GET[id]' LIMIT 1");
?>