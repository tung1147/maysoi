<?php
	$sql = "SELECT * FROM lien_he WHERE id='1'";
	$query = mysql_query($sql);
	$fetch = mysql_fetch_array($query);
?>
<style>
	table.table_lienhe input
	{
		width:300px
	}
	table.table_lienhe textarea
	{
		height:75px;
		width:400px;
		margin-bottom:-1px
	}
</style>
<div class="display_td">
	<b>Li&#234;n h&#7879;</b>
</div>
<div class="display_nd">
	<?php
		echo $fetch['noi_dun'];
		echo "<br>";
	 ?>
	<form action="" method="post">
		<table class="table_lienhe">
			<tr>
				<td width="120px" align="right">
					<b>H&#7885; t&#234;n:</b>
				</td>
				<td><input  name="Ho_ten"/></td>
			</tr>
			<tr>
				<td align="right">
					<b>&#272;&#7883;a ch&#7881;:</b>
				</td>
				<td><input name="Dia_chi"/></td>
			</tr>
			<tr>
				<td align="right">
					<b>Email:</b>
				</td>
				<td><input name="Email"/></td>
			</tr>
			<tr>
				<td align="right">
					<b>Phone:</b>
				</td>
				<td><input name="Phone"/></td>
			</tr>
			<tr>
				<td align="right">
					<b>N&#7897;i dung:</b>
				</td>
				<td><textarea name="Noi_dung"></textarea></td>
			</tr>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					<input  type="submit" name="gui_lien_he" value="G&#7917;i li&#234;n h&#7879;"/>
					
				</td>
			</tr>
		</table>
	</form>
</div>