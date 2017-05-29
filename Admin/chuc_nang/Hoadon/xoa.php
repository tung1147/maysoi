<?php
	mysql_query("DELETE FROM hoa_don WHERE  hoa_don.id='$_GET[id] LIMIT 1");
?>