<?php
	

	$sql = "SELECT *FROM san_pham WHERE id ='$_GET[id]'";
	$query = mysql_query($sql);
	$fetch = mysql_fetch_array($query);
	$id_sp =$fetch['id'];
	#echo $id_sp;
	#$link_image = "image/San_pham/".$fetch['hinh_anh'];
	
	$link_tailieu = "image/Tai_lieu/".$fetch['brochure'];
	
?>
<div class="display_td">
	<b> <?php echo $fetch['ten']; ?></b>
</div>
<div class="display_nd">
	<?php
		echo "<table width=\"750px\" cellspacing=\"2\" cellpadding=\"0\" style=\"background:#FFFFFF\">
			<tr >
				<td width=\"250px\" align=\"center\" valign=\"top\">
					<a href=\"#\">
						<img src=\"image/San_pham/$fetch[hinh_anh]\" border=\"0\" width=\"250px\" height=\"180px\">
					</a>
				</td>
				<td width=\"422px\" valign=\"top\" align=\"left\">

					<font color=\"#0033FF\" size=\"5px\"> 
						$fetch[ten]
					</font>
					<br>
					<b>Gi&#225; b&#225;n:</b>
					<span style=\"font-weight:bold;color:#a42e2e\">
						$fetch[gia] USD
					</span>
					<br>					
					<b>Xu&#7845;t x&#7913;:</b>
					<span style=\"font-weight:bold;color:#a42e2e\">
						$fetch[xuat_xu]
					</span>
					<br>
					<b>B&#7843;o h&#224;nh:</b>
					<span style=\"font-weight:bold;color:#a42e2e\">
						$fetch[bao_hanh] 
					</span>
					<br>
					<b>&#272;&#7863;t h&#224;ng qua Phone:</b>
					<span style=\"font-weight:bold;color:#a42e2e\">
						$fetch[lien_he] 
					</span>
					<br>					
					<b>Dowload Brochure:</b>
					<a href=\"$link_tailieu\" target=\"_blank\">Dowload</a>
					<br>
					
					<div style=\"width:5px;height:5px\"></div>
					
					
					
				</td>
			</tr>
			</table>
			<div style=\"height:1px;overflow : hidden ; \"></div>
			<table width=\"750px\" style=\"border:1px solid #999999;background:#ececec\">
				<tr>
					<td width=\"750px\" align=\"left\" colspan=\"2\">
						$fetch[noi_dung]
					</td>
				</tr>
			</table>";
			
?>
<!--<form action=\"\">
							<input type=\"hidden\" name=\"thamso\" value=\"xem_gio_hang\">			
							<input type=\"hidden\" name=\"id_sp\" value=\"<?php echo $id_sp;?>\">										<input type=\"hidden\" size=\"5\" value=\"1\" name=\"so_luong\">
							<br>
							<input type=\"image\" src=\"image/Giaodien/cart_big.gif\" style=\"margin:3px 0px 3px 0px;border:0px solid red\">
						
					</form>-->
</div>






























<?php
  	$sql = "SELECT * FROM san_pham WHERE thuoc_menu =$fetch[thuoc_menu]  ORDER BY id DESC LIMIT 0,15";
	$query = mysql_query($sql);
?>
<?php
	function display ($td,$link_image,$gia,$link_chitiet,$id_sp)
	{
?>
		<td>
			<div>
				<a href="<?php echo $link_chitiet; ?>">
					<img  src="<?php echo $link_image; ?>"/>
				</a>
				<br>
				<a href="<?php echo $link_chitiet;?>" class="td"><?php echo $td;?></a>
				<br>
				<span class="gia_ban"><?php echo $gia;?>USD</span>
				<form action="">
						<input type="hidden" name="thamso" value="xem_don_hang">
						<input type="hidden" name="id_sp" value="<?php echo $id_sp; ?>">
						<input type="hidden" size="5" value="1" name="so_luong">
						<br>
						<input type="image" src="image/Giaodien/cart_big.gif" style="margin:3px 0px 3px 0px;border:0px solid red">
					</form>
				
			</div>
		</td>
<?php
	}
?>
<div class="display_td">
	<b>S&#7843;n ph&#7849;m li&#234;n quan</b>
</div>

<div class="display_nd">
	<center>

		<table class="san_pham" id="san_pham">
			<?php
				$img ="image/San_pham/";
				$a=1;
				
				
				while($fetch=mysql_fetch_array($query))
				{
					
					#echo $a;
						if($a ==1)
						{
							echo "<tr>";
						}
						$link_image = $img."$fetch[hinh_anh]";
						$id_sp =$fetch['id'];
						#$gia = $fetch['gia'];
						$link_chitiet = "?thamso=chitiet_sanpham&id=$fetch[id]";
						display ($fetch['ten'],$link_image,$gia,$link_chitiet,$id_sp);
						if($a==3)
						{
							$a=1;
							echo "</tr>";
						}
						else
						{
							$a++;
						}
					
				}
			?>
		</table>
		
	</center>
</div>

<script type="text/javascript">
	setTimeout(function(){dan_san_pham__abc();},500)
</script>
