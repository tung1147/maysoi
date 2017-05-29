<?php
	if($_POST['txtSua_menu_ngang']!="")
	{
		$chuoi ="UPDATE menu SET ten='$_POST[txtSua_menu_ngang]',lien_ket='$_POST[txtSua_lien_ket]' WHERE menu.id='$_GET[id]' LIMIT 1";
		mysql_query($chuoi);
	}else{
		thongbao("Không bỏ trống tên menu.");
	}
?>
