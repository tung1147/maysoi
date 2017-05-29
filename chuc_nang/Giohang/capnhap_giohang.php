<?php
for($i=0;$i<count($_SESSION[$ten_danh_dau.'id_giohang']);$i++)
{
	$name="cngh_abc__$i";
	$_SESSION[$ten_danh_dau.'soluong_giohang'][$i]=$_POST[$name];
}
?>