<?php
	if($_POST['txtTen_dang_nhap'] != "" && $_POST['txtMat_khau'] !="")
	{
		$dia_chi = nl2br($_POST['txtDia_chi']);
		mysql_query("UPDATE thanh_vien SET 
		ten_dang_nhap ='$_POST[txtTen_dang_nhap]',
		mat_khau ='$_POST[txtMat_khau]',
		email ='$_POST[txtEmail]',
		dien_thoai = '$_POST[txtPhone]',
		dia_chi ='$dia_chi' WHERE thanh_vien.id = '$_GET[id]' LIMIT1 ");
	}
	else
	{
		thongbao("Không được bỏ trống tên đăng nhập và mật khẩu.");
	}
?>