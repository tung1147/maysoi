<?php
	if($_POST['ho_ten']!="" and $_POST['mat_khau']!="")
	{
		$kd=$_POST['ho_ten'];
		$mk=$_POST['mat_khau'];
		$sql="select count(*) from thanh_vien where ten_dang_nhap='$kd'";
		$query=mysql_query($sql);
		$fetch=mysql_fetch_row($query);
		if($fetch[0]==0)
		{
			$dia_chi=nl2br($_POST['dia_chi']);
			$chuoi="
				INSERT INTO `thanh_vien` ( `id` , `ten_dang_nhap` , `mat_khau` , `hinh_dai_dien` , `email` , `dien_thoai` , `dia_chi` )
				VALUES (
				NULL , '$_POST[ho_ten]', '$_POST[mat_khau]', '', '$_POST[email]', '$_POST[dien_thoai]', '$dia_chi'
				);";
			mysql_query($chuoi);
			$_SESSION[$ten_danh_dau.'ten_dang_nhap']=$_POST['ho_ten'];
			$_SESSION[$ten_danh_dau.'mat_khau']=$_POST['mat_khau'];
			//unset($_SESSION[$ten_danh_dau."thong_ke"]);
			#setcookie($ten_danh_dau."so_nguoi_online");
			#$sql_1="DELETE FROM `so_nguoi_online` WHERE ten_dang_nhap='' LIMIT 1";
			#mysql_query($sql_s);
			thongbao("Bạn đã đăng ký thành công.");
		}
		else
		{
			thongbao("Tên tai khoản đã được đăng ký \\nBạn vui lòng đăng ký bằng tài khoản khác");
		}
	}
	else
	{
		thongbao("Không được bỏ trống tên và mật khẩu");
	}
?>
