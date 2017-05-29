<?php
	$sql = "SELECT *FROM san_pham ORDER BY id DESC LIMIT 0,3";
	$query = mysql_query($sql);
?>
<div class="khung_td">
	<span><?php echo $lang['sanphammoi'] ;?></span>
</div>
<div class="khung_nd">
	<center>
		<div class="cao_3_px"></div>
		<div class="cao_3_px"></div>
		<div class="san_pham_moi">
			<?php
				while($fetch = mysql_fetch_array($query))
				{
					#echo $fetch['hinh_anh'];
					$link_image = "image/San_pham/$fetch[hinh_anh]";
					$link_chitiet = "?thamso=chitiet_sanpham&id=$fetch[id]";
					#echo $link_image;
			?>
				<div class="display">
					<div class="cao_3_px"></div>
					<a href="<?php echo $link_chitiet ;?>"><img  src="<?php echo $link_image;?>"/></a>
					<div class="cao_3_px"></div>
					<a href="<?php echo $link_chitiet ;?>"><?php echo $fetch['ten'];?></a>
				</div>
				<div class="cao_3_px"></div>
			<?php
				}
			?>
		</div>
	</center>
</div>