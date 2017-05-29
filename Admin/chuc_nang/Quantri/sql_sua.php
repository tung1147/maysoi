<?php
	#echo "AAAAA";
	if($_POST['txtTaikhoan'] !="" AND $_POST['txtPassword'] !=""  )
	{
		mysql_query("UPDATE thongtin_quantri SET ky_danh ='$_POST[txtTaikhoan]',mat_khau='$_POST[txtPassword]' WHERE id='1' LIMIT 1");		
	}
	else
	{
		thongbao("Không bỏ trống tài khoản và mật khẩu.");
	}
?>