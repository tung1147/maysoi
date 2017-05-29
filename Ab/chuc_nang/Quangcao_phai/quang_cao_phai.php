<?php
	$sql = "SELECT *FROM quang_cao WHERE vi_tri='phai' ORDER BY id DESC";
	$query = mysql_query($sql);
	
?>
<div class="khung_td">
	<span>Qu&#7843;ng c&#225;o</span>
</div>
<div class="khung_nd">
	<center>
		<div class="cao_3_px"></div>
		<div class="cao_3_px"></div>
		<?php 
			while($fetch = mysql_fetch_array($query))
			{
				$cat_chuoi = explode(".",$fetch['ten_file']);
				$duoi_anh = $cat_chuoi[count($cat_chuoi)-1];
				if($duoi_anh != "swf")
				{
			?>
					<a href="<?php echo $fetch['link'] ;?>" target="_blank">
						<img src="image/Quangcao/<?php echo $fetch['ten_file'];?>" border="0" width="<?php echo $fetch['rong'];?>" height="<?php echo $fetch['cao'];?>"/>
					</a>
					<div class="cao_3_px"></div>
				<?php
				}
				else
				{
					flash("image/Quangcao/$fetch[ten_file]","$fetch[rong]","$fetch[cao]");
					echo'<div class="cao_3_px"></div>';
				}
			}
		?>
	</center>
</div>