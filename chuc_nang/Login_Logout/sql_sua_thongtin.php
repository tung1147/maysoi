
<?php
	if($_POST['mat_khau']!="")
	{
		$kd=$_SESSION[$ten_danh_dau.'ky_danh'];
		$dia_chi=nl2br($_POST['dia_chi']);
		$chuoi="UPDATE `thanh_vien` SET
		`mat_khau` = '$_POST[mat_khau]',
		`email` = '$_POST[email]',
		`dien_thoai` = '$_POST[dien_thoai]',
		`dia_chi` = '$dia_chi' WHERE thanh_vien.ten_dang_nhap ='$kd' LIMIT 1 ;";
		mysql_query($chuoi);
		$_SESSION[$ten_danh_dau.'mat_khau']=$_POST['mat_khau'];
	}
	else
	{
		thongbao("Không du?c b? tr?ng m?t kh?u");
	}
?>