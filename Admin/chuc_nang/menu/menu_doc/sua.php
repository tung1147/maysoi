<?php
	$a = "SELECT *FROM menu WHERE id='$_GET[id]'";
	$query =mysql_query($a);
	 $array= mysql_fetch_array($query);
	
?>

<center>
<table width="500px" bgcolor="#99CCCC" style="margin-top: 6px">
	<tr height="10px" align="center">
		<td colspan="2">S&#7917;a Menu</td>				
	</tr>
</table>
<form action="" method="post">
		<table  id="table" width="500px" border="1">			
			<tr>
				<td>T&#234;n menu c&#361;:</td>
				<td><?php echo $array['ten'] ?></td>
			</tr>
			<tr>
				<td>T&#234;n menu m&#7899;i</td>
				<td><input  type="text" name="txtSua_menudoc" size="40" value="<?php echo $array['ten'] ?>"/></td>
			</tr>
			<tr>
				<td></td>
				<td>	
					<input type="submit" name="sua_menu_doc" value="S&#7917;a menu d&#7885;c">
						
				
					<!--<input type="hidden" name="sua_menu_doc" value="sua_menu_doc" />
					<div style="height:20px;overflow:hidden">
					<input type="image" src="../../../../image/Giaodien/sua.gif" style="border:0px solid red;_margin-bottom:-4px">
					<a href="?thamso=quan_ly_menu_doc&trang=<?php echo $_GET['page']; ?>">
						<input type="submit" name="quay_lai" value="Quay l&#7841;i" />
					</a>-->
					
					
				</td>
			</tr>
		</table>
		</form>
</center>