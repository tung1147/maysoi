<?php
	$sql = "SELECT *FROM thanh_vien WHERE id ='$_GET[id]'"; 
	$query = mysql_query($sql);
	$array= mysql_fetch_array($query);
	$dia_chi = str_replace("<br/>","",$array['dia_chi']);	
	 
	
?>
<CENTER>
	<table width="500px" bgcolor="#99CCCC" style="margin-top: 6px" >
		<tr >
			<td align="center"> S&#7917;a th&#244;ng tin th&#224;nh vi&#234;n</td>
		</tr>
	</table>
	<form action="" method="POST">
		<table border="1px">
			<tr>
				<td>T&#234;n &#273;&#259;ng nh&#7853;p:</td>
				<td><input  type="text" name="txtTen_dang_nhap" size="50" value="<?php echo $array['ten_dang_nhap'] ?>"/></td>				
			</tr>
			<tr>
				<td>M&#7853;t kh&#7849;u:</td>
				<td><input  type="text" size="50" name="txtMat_khau" value="<?php echo $array['mat_khau'] ?>"/></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input  type="text" size="50" name="txtEmail" value="<?php echo $array['email'] ?>"/></td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td><input  type="text" size="50" name="txtPhone" value="<?php echo $array['dien_thoai'] ?>"/></td>
			</tr>
			<tr>
				<td>&#272;&#7883;a ch&#7881;:</td>
				<td><input  type="text" size="50" name="txtDia_chi" value="<?php echo $dia_chi ?>"/></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input  type="submit" value="S&#7917;a" name="sua_thanh_vien"/>
				</td>
			</tr>
		</table>
	</form>
</CENTER>
