<?php
	#echo "bbbbbbbbb";
	if($_POST['txtSua_menudoc'] != "")
	{
		#echo $_GET['id'];
			$chuoi = "UPDATE menu SET ten ='$_POST[txtSua_menudoc]' WHERE  menu.id ='$_GET[id]'  LIMIT 1";
			mysql_query($chuoi);	
	}
	else{
		thongbao("Không du?c b? tr?ng tên menu m?i.");
	}
?>
