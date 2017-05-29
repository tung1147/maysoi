<?php
#include("../../../../ketnoi.php");
#include("chuc_nang/xu_ly_post_get.php");
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
<CENTER>
	<div>
		<table width="500px" bgcolor="#99CCCC" style="margin-top: 6px">
			<tr height="10px" align="center" >
				<td><font size="5px" color="#ff0000">Th&#234;m menu d&#7885;c</font></td>
			</tr>
		</table>
		<form action="" method="post">
			<table width="500px" align="center" style="margin-top: 0px; margin-bottom: 6px" border="1">
				<tr>
					<td>C&#7845;p &#273;&#7897;</td>
					<td><?php hop_option () ?></td>
				</tr>
				<tr>
					<td>T&#234;n menu m&#7899;i</td> <!--Ten menu moi-->
					<td>
						<input  type="text" name="txtMenu_doc" size="50px"/>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="hidden" name="them_menu_doc" value="them_menu_doc">
						<input type="image" align="right" src="../image/Giaodien/them.gif" style="border:0px solid red;_margin-bottom:-4px">
					</td>
					
				</tr>
			</table>
		</form>
		
	</div>
</CENTER>