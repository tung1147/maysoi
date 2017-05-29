<?php
	$sql = "SELECT *FROM thongtin_quantri WHERE id ='1' ";
	$query = mysql_query($sql);
	$fetch = mysql_fetch_array($query);
?>
<CENTER>
	<table width="600px"  bgcolor="#99CCCC" style="margin-top: 6px">
		<tr>
			<td align="center">
				<font  size="5px" color="#ff0000">S&#7917;a t&#224;i kho&#7843;n qu&#7843;n tr&#7883;</font>
			</td>
		</tr>
	</table>
	<form action="" method="post">
		<table border="1" width="600px">
			<tr>
				<td>T&#234;n &#273;&#259;ng nh&#7853;p:</td>
				<td>
					<input  type="text" name="txtTaikhoan" value="<?php echo $fetch['ky_danh']; ?> " size="50px"/>
				</td>
			</tr>
			<tr>
				<td>M&#7853;t kh&#7849;u:</td>
				<td>
					<input  type="password" name="txtPassword" value="<?php  echo $fetch['mat_khau']; ?>" size="50px"/>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="sua_quan_tri" value="S&#7917;a qu&#7843;n tr&#7883;"/>
				</td>
			</tr>
		</table>
	</form>
</CENTER>
