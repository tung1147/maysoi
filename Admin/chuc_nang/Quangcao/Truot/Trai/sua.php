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
	#echo $_GET['id'];
	$sql = "SELECT *FROM  quang_cao WHERE id='$_GET[id]'";
	$query = mysql_query($sql);
	$fetch = mysql_fetch_array($query);
	/*$noi_dung = thay_the_fckeditor($fetch['noi_dung']);
	$noi_dung=str_replace('"','\"',$noi_dung);
	$noi_dung=str_replace("\n","",$noi_dung);
	$noi_dung=str_replace("\r","",$noi_dung);
	$noi_dung=str_replace("\t","",$noi_dung);*/
	$link_image = "../image/Quangcao/$fetch[ten_file]";
	$rong = $fetch['rong'];
	$cao = $fetch['cao'];
?>
<CENTER>
	<table width="500px"  bgcolor="#99CCCC" style="margin-top: 6px" >
		<tr>
			<td align="center"><font  size="5px" color="#ff0000">S&#7917;a qu&#7843;ng c&#225;o ph&#7843;i</font></td>		
		</tr>
	</table >
		<form action="" method="post" enctype="multipart/form-data">
		<table width="500px" border="1" style="margin-top: 0px; margin-bottom: 6px">
			<tr>
				<td>Li&#234;n k&#7871;t:</td>
				<td><input  type="text" name="txtLien_ket" size="50px" value="<?php echo $fetch['link'] ?>"></td>
			</tr>
			<tr>
				<td>H&#236;nh &#7843;nh/Flash:</td>
				<td><input  type="file" name="img" /></br>
					<?php 
						$cat_chuoi = explode(".",$fetch['ten_file']);
						$duoi_anh = $cat_chuoi[count($cat_chuoi)-1];
					?>
					<input type="hidden" name="img_old" value="<?php echo $fetch['ten_file']; ?>" />
					<?php 
						echo "<div style=\"width:$rong;height:$cao;overflow:hidden;margin:6px 6px 6px 6px\">";
						if($duoi_anh != "swf")
						{
					?>	
							<img src="<?php echo $link_image; ?>" style="margin:6px 0px 6px 0px;width:<?php echo $rong;?>; height: <?php echo $cao; ?>">
					<?php
						}
						else
						{
							flash($link_image,$rong,$cao);
						}
						echo "</div>";
					?>
					
				</td>
			</tr>			
			<tr>
				<td colspan="2" align="center">
					<input  type="submit" name="sua_quang_cao_truot_trai" value="S&#7917;a qu&#7843;ng c&#225;o ph&#7843;i"/>
					
				</td>
			</tr>
		</table>	
	</form>
</CENTER>