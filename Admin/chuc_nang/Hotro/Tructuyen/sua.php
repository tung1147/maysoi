<?php
	$sql = "SELECT *FROM hotro_tructuyen WHERE id='$_GET[id]'";
	$query = mysql_query($sql);
	$fetch = mysql_fetch_array($query);
	#echo $fetch['ten_nick'];
?>
<CENTER>
	<table width="600px"  bgcolor="#99CCCC" style="margin-top: 6px">
		<tr>
			<td align="center"><font  size="5px" color="#ff0000">S&#7917;a yahoo/skype</font></td>
		</tr>
	</table>
	<form action="" method="post">
		<table width="600px" border="1">
			<tr>
				<td>T&#234;n nick tr&#7921;c tuy&#7871;n:</td>
				<td>
					<input type="text" name="txtTructuyen" value="<?php echo $fetch['ten_nick'];?>" size="50px"/>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input  type="submit" name="sua_truc_tuyen" value="S&#7917;a "/>
				</td>
			</tr>
		</table>
	</form>
</CENTER>
