<?php
  	$sql = "SELECT * FROM san_pham WHERE trang_chu='Co' ORDER BY id DESC LIMIT 0,15";
	$query = mysql_query($sql);
	#$fetch=mysql_fetch_array($query)
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
							<input type="hidden" name="thamso" value="xem_gio_hang">	
							
							<input type="hidden" name="id_sp" value="<?php echo $id_sp; ?>">										<input type="hidden" size="5" value="1" name="so_luong">
							<br>
							<input type="image" src="image/Giaodien/cart_big.gif" style="margin:3px 0px 3px 0px;border:0px solid red">
						
					</form>
				
			</div>
		</td>
<?php
	}
?>
<div class="display_td">
	<b><?php echo $lang['sanpham'];?></b>
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
					$gia= $fetch['gia'];
					$link_chitiet = "?thamso=chitiet_sanpham&id=$fetch[id]";
					display ($fetch['ten'],$link_image,$gia,$link_chitiet,$id_sp);
					#echo $id_sp;
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
		</form>

</div>
