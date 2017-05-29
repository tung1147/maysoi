<?php
/**
* Co ban ve them san pham:
* 1.Kiem tra menu con co ton tai hay khong
* 
*/

function kiem_tra_menu_con($id){
	
	$a = "SELECT COUNT(*) FROM menu WHERE thuoc_menu='$id'"; #tra ve so luong cac dong trong bang co gia tri $id
	$query = mysql_query($a);
	$row = mysql_fetch_row($query);
	if($row[0] !=0){
		return "Yes";
	}else{
		return "No";
	}
}
function option_dequy($id,$ab){
	$ab++;
	$kt = "";
	for($i=1;$i<=$ab;$i++){
		$kt=$kt."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	}
	$con ="SELECT *FROM menu WHERE vitri_menu='doc' AND thuoc_menu ='$id' ORDER BY id";
	$query = mysql_query($con);
	
	while($row = mysql_fetch_array($query)){
		echo "<option value=\"$row[id]\">";
		echo $kt;
		echo $row['ten'];
		echo "</option>";
		$menu_con = kiem_tra_menu_con($row['id']);
		if($menu_con == "Yes"){
			option_dequy($row['id'],$ab);
		}
	}
}
function hop_option (){
	$con ="SELECT *FROM menu WHERE vitri_menu='doc' AND thuoc_menu ='' ORDER BY id";
	$query = mysql_query($con);
	echo "<select name=\"cap_do\">";
	echo "<option value =\"\"> C&#7845;p &#273;&#7847;u</option>";
	
	while($row = mysql_fetch_array($query)){
		echo "<option value =\"$row[id]\">";
		echo $row['ten'];
		echo "<option>";
		$menu_con = kiem_tra_menu_con($row['id']);
		if($menu_con == "Yes"){
			option_dequy($row['id'],$ab);
		}
		
	}
	echo "</select>";
}
?>
<center>

	<table align="center" width="900px"  bgcolor="#99CCCC" style="margin-top: 6px">
		<tr >
			<td colspan="2" align="center"><font size="5px" color="#ff0000">Th&#234;m s&#7843;n ph&#7849;m m&#7899;i</font></td>
			
		</tr>
	</table>
	<form action="" method="post" enctype="multipart/form-data">
	<table width="900px" align="center" id="table_them" border="1">
		<tr>
			<td>C&#7845;p &#273;&#7897; menu:</td>
			<td><?php hop_option($ten_danh_dau)?></td>
		</tr>
		<tr>
			<td>T&#234;n s&#7843;n ph&#7849;m:</td>
			<td><input  type="text" name="txtThem_san_pham" size="100px"/></td>
		</tr>
		<tr>
			<td>H&#236;nh &#7843;nh m&#244; t&#7843;:</td>
			<td><input type="file" name="img"/></td>
		</tr>
		<tr>
			<td>Brochure:</td>
			<td><input type="file" name="brochure"/></td>
		</tr>
		<tr>
			<td>Gi&#225; b&#225;n:</td>
			<td><input type="text" name="txtGia_sp" size="10"/></td>
		</tr>
		<tr>
			<td>&#272;&#7863;t l&#234;n trang ch&#7911;:</td>
			<td><select name="selTrangchu">
				<option value="Co">C&#243;</option>
				<option value=""> Kh&#244;ng</option>
			</select></td>
		</tr>
		<tr>
			<td>Xu&#7845;t x&#7913;</td>
			<td><input type="text" name="txtXuat_xu" size="10"/></td>
		</tr>
		<tr>
			<td>B&#7843;o h&#224;nh</td>
			<td><input type="text" name="txtBao_hanh" size="10"/></td>
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
										oFCKeditor.Value=="";
										oFCKeditor.Config["EnterMode"]		= "br" ;
										oFCKeditor.Create();
										document.getElementById('xEnter').value = "br" ;
										//document.getElementById("noidung").value=jljl;
						</script>
				</center>
			</td>
			
		</tr>
		<tr>
			
			<td colspan="2"><center>
				<input  type="hidden" name="them_san_pham" value="them_san_pham"/>
				<div style="width:220px;height:35px;margin:6px 0px 6px 0px;overflow:hidden">
					<input type="image" src="../image/Giaodien/them.gif" style="border:0px solid red"/>
				</div>
				</center>
			</td>
		</tr>
	</table>
</form>
</center>