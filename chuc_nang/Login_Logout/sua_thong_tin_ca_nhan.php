<?php
	
	$kd=$_SESSION[$ten_danh_dau.'ky_danh'];
	//echo $kd."<hr>";
	$sql="select * from thanh_vien where ten_dang_nhap='$kd'";
	$query=mysql_query($sql);
	$fetch=mysql_fetch_array($query);
	$dia_chi=str_replace("<br />","",$fetch['dia_chi']);
?>
<style>
table.table_sua_thongtin
{
	border-collapse: collapse;
	border:0px solid #999999;
	text-align:left;
	width:618px;
}
table.table_sua_thongtin td
{
	border:0px solid #999999;
}
table.table_sua_thongtin input
{
	width:300px;
}
table.table_sua_thongtin textarea
{
	width:400px;
	height:75px;
	margin-bottom:-1px
}
</style>
<div class="display_td">
	<b>S&#7917;a th&#244;ng tin c&#225; nh&#226;n</b>
</div>
<div class="div_ge_nd">
	<?php
		if($check_login =="Yes")
		{
	?>
			<center>
				<form action="" method="post">
					<table class="table_sua_thongtin">
						<tr>
							<td align="right"><b>M&#7853;t kh&#7849;u:</b></td>
							<td><input name="mat_khau" type="password" value="<?php echo $fetch['mat_khau']; ?>"></td>
						</tr>
						<tr>
							<td align="right"><b>Email:</b></td>
							<td><input name="email" value="<?php echo $fetch['email']; ?>"></td>
						</tr>
						<tr>
							<td align="right"><b>Phone:</b></td>
							<td><input name="dien_thoai" value="<?php echo $fetch['dien_thoai']; ?>"></td>
						</tr>
						<tr>
							<td align="right"><b>&#272;&#7883;a ch&#7881;:</b></td>
							<td>
								<textarea name="dia_chi"><?php echo $dia_chi; ?></textarea>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>
								<input type="submit" name="sua_thanh_vien" value="S&#7917;a t&#224;i kho&#7843;n" style="width:100px;height:20px;border:0px solid red;margin:2px 0px 2px 0px;_margin:2px 0px -1px 0px">
								
							</td>
						</tr>
					</table>
				</form>
			</center>
	<?php
		}
		else
		{
			echo " B&#7841;n ch&#432;a &#273;&#259;ng nh&#7853;p";
		}
	?>
</div>