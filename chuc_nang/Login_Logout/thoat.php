<?php

	$kd=$_SESSION[$ten_danh_dau.'ky_danh'];
	unset($_SESSION[$ten_danh_dau.'ky_danh']);
	unset($_SESSION[$ten_danh_dau.'mat_khau']);

	#$tv_u="UPDATE `so_nguoi_online` SET `ky_danh` = '' WHERE `so_nguoi_online`.`ky_danh` = '$kd' LIMIT 1 ";
	#mysql_query($tv_u);
?>