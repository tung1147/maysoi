<?php
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
<?php
	$sql = "SELECT *FROM banner";
	$query = mysql_query($sql);
	$fetch = mysql_fetch_array($query);
	$noi_dung=thay_the_fckeditor($tv_2['noi_dung']);
	$noi_dung=str_replace('"','\"',$noi_dung);
	$noi_dung=str_replace("\n","",$noi_dung);
	$noi_dung=str_replace("\r","",$noi_dung);
	$noi_dung=str_replace("\t","",$noi_dung);
 ?>
<CENTER>
	<table width="940px"  bgcolor="#99CCCC" style="margin-top: 6px">
		<tr>
			<td align="center">
				<font  size="5px" color="#ff0000">Thay &#273;&#7893;i banner</font>
			</td>
		</tr>
		
	</table>
	<form action="" method="post" enctype="multipart/form-data">
		<table width="900px" border="1" style="margin-top: 0px; margin-bottom: 6px">
			<tr>
				<!--<td colspan="2">
					<center>

						<script type="text/javascript">
							var oFCKeditor = new FCKeditor('noidung');
							oFCKeditor.BasePath = "fckeditor/";
							oFCKeditor.Width	= 930 ;
							oFCKeditor.Height	= 300 ;
							oFCKeditor.Value="<?php echo $noi_dung; ?>";
							oFCKeditor.Config["EnterMode"]		= "br" ;
							oFCKeditor.Create();
							document.getElementById('xEnter').value = "br" ;
							//document.getElementById("noidung").value=jljl;
						</script>
					</center>
				</td>-->
				<td>Banner mới:</td>
				<td><input type="file" name="banner"/></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="sua_banner" value="S&#7917;a banner"/>
				</td>
			</tr>
		</table>
	</form>
</CENTER>
