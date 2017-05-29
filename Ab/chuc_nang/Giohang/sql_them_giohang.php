<?php
//exit();

	if($_GET['id_sp'] !="")
	{
		#echo "aaaa1";
		for($i=0;$i<count($_SESSION[$ten_danh_dau.'id_giohang']);$i++)
		{
			// cap nhat gio hang
			$id=$_SESSION[$ten_danh_dau.'id_giohang'][$i];
			if($id==$_GET['id_sp'])
			{
				$trung_lap="co";
					$sl_cu=$_SESSION[$ten_danh_dau.'soluong_giohang'][$i];
					$_SESSION[$ten_danh_dau.'soluong_giohang'][$i]=$sl_cu + $_GET['so_luong'];
				break;
			}
		}
		$dem_giohang=count($_SESSION[$ten_danh_dau.'id_giohang']);
		if($trung_lap=="")
		{
			$_SESSION[$ten_danh_dau.'id_giohang'][$dem_giohang]=$_GET['id_sp'];
			$_SESSION[$ten_danh_dau.'soluong_giohang'][$dem_giohang]=$_GET['so_luong'];
		}
		$_SESSION['jac_41']="co";
		trangtruoc();
		exit();
		
	}
	

?>
