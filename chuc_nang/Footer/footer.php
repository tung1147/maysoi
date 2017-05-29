<?php

	$sql="select * from footer";
	$query=mysql_query($sql);
	$fetch=mysql_fetch_array($query);
	
?>
<center>
	<div class="khung_footer">
		<?php echo $fetch['noi_dung']; ?>
	</div>
</center>