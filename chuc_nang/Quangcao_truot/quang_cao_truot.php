<?php
	$sql = "SELECT *FROM quang_cao WHERE vi_tri='truot_trai' ORDER BY id DESC";
	$query = mysql_query($sql);
	$fetch = mysql_fetch_array($query);
	#echo  $fetch['link'];
?>
<div id="divAdRight" style="display: block; position: fixed; top: 10px;"> <a href="<?php echo $fetch['link'] ;?>" target="_blank"><img src="image/Quangcao/<?php echo $fetch['ten_file'];?>" width="120" /></a> </div>

<?php
	$sql = "SELECT *FROM quang_cao WHERE vi_tri='truot_phai' ORDER BY id DESC";
	$query = mysql_query($sql);
	$fetch = mysql_fetch_array($query);
	#echo  $fetch['link'];
?>
 	 <div id="divAdLeft"  style="display: block; position: fixed; top: 10px; right: 0px;"> <a href="<?php echo $fetch['link'] ;?>"><img src="image/Quangcao/<?php echo $fetch['ten_file'];?>" width="120" /></a> </div>
	
	
	