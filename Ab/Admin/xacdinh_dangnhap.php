<?php

	$kd=$_SESSION[$ten_danh_dau."ky_danh"];
	$mk=$_SESSION[$ten_danh_dau."mat_khau"];
	$a = "SELECT count(*) FROM thongtin_quantri WHERE ky_danh='$kd' AND mat_khau='$mk'";
	$query=mysql_query($a);
	$b = mysql_fetch_row($query);
	if($b[0] != 0)
	{
		$xacdinh_dangnhap="co";
		#echo "aaa";
	}
	else
	{
		$xacdinh_dangnhap="khong";
		#echo "chua dang nhap";
	}
?>
