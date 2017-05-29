<?php
	mysql_query("DELETE FROM san_pham WHERE san_pham.id = $_GET[id]  LIMIT 1");
?>