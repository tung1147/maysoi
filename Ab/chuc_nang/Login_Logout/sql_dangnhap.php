<?php
#echo "aaaa";
	$kd=$_POST['ky_danh'];
	$mk=$_POST['mat_khau'];
	#$sql="select count(*) from thanh_vien where ten_dang_nhap='$kd' and mat_khau='$mk'";
	$sql ="SELECT COUNT(*) FROM thanh_vien WHERE ten_dang_nhap='$kd' and mat_khau='$mk'";
	$query=mysql_query($sql);
	$fetch=mysql_fetch_row($query);
	if($fetch[0]!=0)
	{
		$_SESSION[$ten_danh_dau.'ten_dang_nhap']=$_POST['ky_danh'];
		$_SESSION[$ten_danh_dau.'mat_khau']=$_POST['mat_khau'];
		//unset($_SESSION[$ten_danh_dau."thong_ke"]);
		#setcookie($ten_danh_dau."so_nguoi_online");
		#$tv_x="DELETE FROM `so_nguoi_online` WHERE ky_danh='' LIMIT 1";
		#mysql_query($tv_x);
		#echo "dang nhap thanh cong";
		
	}
	else
	{
		thongbao("Sai tên ho?c m?t kh?u");
	}
?>