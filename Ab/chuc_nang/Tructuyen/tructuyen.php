<?php
	$sql = "SELECT *FROM hotro_tructuyen ORDER BY id";
	$query = mysql_query($sql);
?>
<div class="khung_td">
	<span>H&#7895; tr&#7907; t&#7921;c tuy&#7871;n</span>
</div>
<div class="khung_nd">
	<center>
		<div class="cao_3_px"></div>
		<div class="cao_3_px"></div>
		<?php
			while($fetch= mysql_fetch_array($query))
			{
		?>
				<div style="width: 136px;height:25px;overflow: hidden;">
					<a href="ymsgr:sendim?<?php echo $fetch['ten_nick']; ?>"><img  src="http://opi.yahoo.com/online?u=<?php echo $fetch['ten_nick']; ?>&m=g&t=2" border="0"/></a>
				</div>
				<div class="cao_3_px"></div>
				<div class="cao_3_px"></div>
		<?php
			}
		?>
		<div align="center">
			<span><b>Hotline:</b></span>
			<br>
			 <span><b><font color="#ff0000">0903.228.633</font></b></span>
		</div>
	</center>
</div>