<?php
	function check_menucon($id)
	{
		$sql="select count(*) from menu where thuoc_menu='$id'";
		$query=mysql_query($sql);
		$ab=mysql_fetch_row($query);
		if($ab[0]!=0)
		{
			return "Yes";
		}
		else
		{
			return "No";
		}
	}
	function option_dequy($id,$num,$ten_danh_dau)
	{
		$num++;
		$kt="";
		for($i=1;$i<=$num;$i++)
		{
			$kt=$kt."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		$sql="select * from menu where vitri_menu='doc' and thuoc_menu='$id' order by id";
		$query=mysql_query($sql);
		while($ab=mysql_fetch_array($query))
		{
			if($ab['id']==$_SESSION[$ten_danh_dau."cap_do"]){$selected="selected";}else{$selected="";}
			echo "<option value=\"$ab[id]\" $selected>";
				echo $kt;
				echo $ab['ten'];
			echo "</option>";
			$ktmnc=check_menucon($ab['id']);
			if($ktmnc=="Yes")
			{
				option_dequy($ab['id'],$num,$ten_danh_dau);
			}
		}
	}
	function hop_option($ten_danh_dau)
	{
		$sql="select * from menu where vitri_menu='doc' and thuoc_menu='' order by id";
		$query=mysql_query($sql);
		echo "<select name=\"cap_do\">";
		while($ab=mysql_fetch_array($query))
		{
			if($ab['id']==$_SESSION[$ten_danh_dau."cap_do"]){$selected="selected";}else{$selected="";}
			echo "<option value=\"$ab[id]\" $selected>";
				echo $ab['ten'];
			echo "</option>";
			$ktmnc=check_menucon($ab['id']);
			if($ktmnc=="Yes")
			{
				option_dequy($ab['id'],0,$ten_danh_dau);
			}
		}
		echo "</select>";
	}
?>

<center>
<?php
	$sql ="SELECT *FROM san_pham WHERE id='$_GET[id]'";
	$query = mysql_query($sql);
	$array = mysql_fetch_array($query);
	$noi_dung = thay_the_fckeditor($array['noi_dung']);
	$noi_dung=str_replace('"','\"',$noi_dung);
	$noi_dung=str_replace("\n","",$noi_dung);
	$noi_dung=str_replace("\r","",$noi_dung);
	$noi_dung=str_replace("\t","",$noi_dung);
 ?>

	<table  width="910px" bgcolor="#99CCCC" style="margin-top: 6px">
	<tr>
		<td align="center"><font size="9px" color="#ff0000">S&#7917;a s&#7843;n ph&#7849;m</font>
		<?php
			switch ($_GET['thamso'])
			{
				case "a":
				break;
				case "sanpham_trangchu":
				$link_dong ="?thamso=sanpham_trangchu&trang=$_GET[trang]";
				break;
				case "index":
				$link_dong = "index.php";
				break;
				default:
				$link_dong="?thamso=quan_ly_san_pham&id=$_GET[id_menu]&tu_khoa=$_GET[tu_khoa]&trang=$_GET[trang]";
			}
		?>
		</td>
		
		
	</tr>
	</table>
	<form action="" method="post" enctype="multipart/form-data">
	<table border="1" width="900px" id="table_sua">
	<tr>
		<td width="200px">T&#234;n s&#7843;n ph&#7849;m:
		
		</td><!--Ten san pham-->
		<td><input  type="text" name="txtTen_san_pham" size="50px"  value="<?php echo $array['ten'];?>"/></td>
	</tr>
	<tr>
		<td width="200px">H&#236;nh &#7843;nh     </td><!--Hinh anh-->
		<td>
								<input type="file" name="img">
								
								<br>
								<input type="hidden" name="hinh_anh" value="<?php echo $array['hinh_anh'];?>">
								<img src="../image/San_pham/<?php echo $array['hinh_anh'];?>" width="150px" height="170px" style="margin:6px 6px 6px 6px">

							</td>
	</tr>
	<tr>
		<td width="200px">Brochure    </td>
		<td>
								<input type="file" name="brochure">
								
								<br>
								<input type="hidden" name="file" value="<?php echo $array['brochure'];?>">
								<?php echo $array['brochure'];?>

							</td>
	</tr
	
	
	
	
	
	
	<tr>
		<td width="200px">Gi&#225; b&#225;n:</td>
		<td><input type="text" name="txtGia_sp" value="<?php echo $array['gia'];?>"/></td>
	</tr>
	<tr>
		
		<td width="200px">&#272;&#7863;t l&#234;n trang ch&#7911;:</td>
			<td>
				<?php
					if($array['trang_chu'] == "Co")
					{
						$sl="selected";
					} 
				?>			
			<select name="selTrangchu">
				<option value="Co" <?php echo $sl; ?>>C&#243;</option>
				<option value=""> Kh&#244;ng</option>
			</select></td>
	</tr>
	<tr>
		<td width="200px">Xu&#7845;t x&#7913;:</td>
		<td><input type="text" name="txtXuat_su" value="<?php echo $array['xuat_xu'];?>"/></td>
	</tr>
	<tr>
		<td width="200px">B&#7843;o h&#224;nh:</td>
		<td><input type="text" name="txtBao_hanh" value="<?php echo $array['bao_hanh'];?>"/></td>
	</tr>
	<tr>
		<td colspan="2">
			<center>
					<b>N&#7897;i dung</b>
						
						<script type="text/javascript">
										var oFCKeditor = new FCKeditor('noidung');
										oFCKeditor.BasePath = "fckeditor/";
										oFCKeditor.Width	= 898 ;
										oFCKeditor.Height	= 400 ;
										oFCKeditor.Value ="<?php echo $noi_dung; ?>";
										oFCKeditor.Config["EnterMode"]= "br" ;
										oFCKeditor.Create();
										document.getElementById('xEnter').value = "br" ;
										//document.getElementById("noidung").value=jljl;
											
						</script>
						
						
				</center>
		</td>
		
	</tr>
	<tr>
		<td align="center" colspan="2"><input  type="submit" name="sua_san_pham" value="S&#7917;a"/>
		<a href="<?php echo $link_dong; ?>" hidefocus="true">Quay l&#7841;i</a></td>
	</tr>
</table>
</form>
</center>