<?php
#echo "AAA";
	function check_menu_con($id)
	{
		$sql="select count (*) from menu where thuoc_menu='$id'";
		$query=mysql_query($sql);
		$fetch=mysql_fetch_row($query);
		if($fetch[0]!=0)
		{
			return "co";
		}
		else
		{
			return "khong";
		}
	}
	
	function hop_option_de_quy($id,$num,$ten_danh_dau)
	{
		$num++;
		$kt="";
		for($i=1;$i<=$num;$i++)
		{
			$kt=$kt."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		$sql="select * from menu where vitri_menu='doc' and thuoc_menu='$id' order by id";
		$query=mysql_query($sql);
		while($fetch=mysql_fetch_array($query))
		{
			if($fetch['id']==$_SESSION[$ten_danh_dau."cap_do"]){$selected="selected";}else{$selected="";}
			echo "<option value=\"$fetch[id]\" $selected>";
				echo $kt;
				echo $fetch['ten'];
			echo "</option>";
			$ktmnc=kiem_tra_menu_con($fetch['id']);
			if($ktmnc=="co")
			{
				hop_option_de_quy($fetch['id'],$num,$ten_danh_dau);
			}
		}
	}
	function hop_option($ten_danh_dau)
	{
		$sql="select * from menu where vitri_menu='doc' and thuoc_menu='' order by id";
		$query=mysql_query($sql);
		echo "<select name=\"cap_do\">";
		while($fetch=mysql_fetch_array($query))
		{
			if($fetch['id']==$_SESSION[$ten_danh_dau."cap_do"]){$selected="selected";}else{$selected="";}
			echo "<option value=\"$fetch[id]\" $selected>";
				echo $fetch['ten'];
			echo "</option>";
			$ktmnc=kiem_tra_menu_con($fetch['id']);
			if($ktmnc=="co")
			{
				hop_option_de_quy($fetch['id'],0,$ten_danh_dau);
			}
		}
		echo "</select>";
	}
	
?>
<CENTER>
	<table width="500px"  bgcolor="#99CCCC" style="margin-top: 6px" >
		<tr>
			<td align="center"><font  size="5px" color="#ff0000">Th&#234;m qu&#7843;ng c&#225;o tr&#225;i</font></td>		
		</tr>
	</table >
		<form action="" method="post" enctype="multipart/form-data">
		<table width="500px" border="1" style="margin-top: 0px; margin-bottom: 6px">
			<tr>
				<td>Li&#234;n k&#7871;t:</td>
				<td><input  type="text" name="txtLien_ket" size="50px"></td>
			</tr>
			<tr>
				<td>H&#236;nh &#7843;nh/Flash:</td>
				<td><input  type="file" name="img" ></td>
			</tr>
			<tr>
				<td>R&#7897;ng:</td>
				<td><input  type="text" name="txtRong" size="50px"></td>
			</tr>
			<tr>
				<td>Cao:</td>
				<td><input  type="text" name="txtCao" size="50px"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input  type="hidden" name="them_quang_cao_trai" value="them_quang_cao_trai"/>
					<input  type="image" src="../image/Giaodien/them_du_lieu.gif"/>
				</td>
			</tr>
		</table>	
	</form>
</CENTER>