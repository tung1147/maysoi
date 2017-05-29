<?php

	$name = $_SESSION[$ten_danh_dau.'ten_dang_nhap'];
	$pass = $_SESSION[$ten_danh_dau.'mat_khau'];
	#echo  $_SESSION[$ten_danh_dau.'ky_danh'];
	#echo  $_SESSION[$ten_danh_dau.'mat_khau'];
	$sql = "SELECT COUNT(*) FROM thanh_vien WHERE ten_dang_nhap='$name' and mat_khau='$pass'"; 
	$query = mysql_query($sql);
	$fetch = mysql_fetch_row($query);
	if($fetch[0] != 0)
	{
		$check_login = "Yes";
	}
	else
	{
		$check_login = "No";
	}
?>