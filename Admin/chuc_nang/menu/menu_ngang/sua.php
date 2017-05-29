<?php
	$sql = "SELECT * FROM  menu WHERE id='$_GET[id]'";
	$rult = mysql_query($sql);
	$array = mysql_fetch_array($rult);
?>
<CENTER>
<table width="500px" bgcolor="#99CCCC" style="margin-top: 6px">
	<tr height="10px" align="center" >
		<td colspan="2">S&#7917;a menu ngang</td>			
	</tr>
</table>
<form action="" method="post">
	<table width="500px" align="center" style="margin-top: 0px; margin-bottom: 6px" border="1" >		
		<tr>
			<td>T&#234;n menu ngang c&#361; :</td>
			<td><?php echo $array['ten']; ?></td>
		</tr>
		<tr>
			<td>T&#234;n menu ngang m&#7899;i:</td>
			<td><input  type="text" name="txtSua_menu_ngang" size="50px"/></td>
		</tr>
		<tr>
			<td>Li&#234;n k&#7871;t:</td>
			<td><input  type="text" name="txtSua_lien_ket" size="50px"/></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="sua_menu_ngang" value="S&#7917;a menu ngang">
						
				
				<a href="?thamso=quan_ly_menu_ngang&trang=<?php echo $_GET['page']; ?>"><input  type="submit" name="" value="Quay l&#7841;i"/></a>
			</td>
		</tr>
	</table>
</form>
</CENTER>