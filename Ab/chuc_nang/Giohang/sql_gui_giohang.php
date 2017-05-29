<?php
	
	if($check_login =="Yes")
	{
		//thongbao("Thuc hien gui don hang");
		if($_POST['ten_dang_nhap'] !="" and $_POST['ho_ten'] and $_POST['dien_thoai']!="" and $_POST['email']!="")
		{
			$noi_dung=nl2br($_POST['noi_dung']);
			$kd=$_SESSION[$ten_danh_dau.'ten_dang_nhap'];
			$don_hang="";
			for($i=0;$i<count($_SESSION[$ten_danh_dau.'id_giohang']);$i++)
			{
				$id_sp=$_SESSION[$ten_danh_dau.'id_giohang'][$i];
				$sl_sp=$_SESSION[$ten_danh_dau.'soluong_giohang'][$i];
				if($sl_sp!=0)
				{
					$don_hang=$don_hang."".$id_sp."___".$sl_sp."______";
					$tv="select * from san_pham where id='$id_sp'";
					$tv_1=mysql_query($tv);
					$tv_2=mysql_fetch_array($tv_1);
					$so=$tv_2['so_luong_mua']+$sl_sp;
					$up="UPDATE `san_pham` SET so_luong_mua = '$so' WHERE `id` ='$id_sp' LIMIT 1 ;";
					mysql_query($up);
				}
			}
			$chuoi="
				INSERT INTO hoa_don VALUES (NULL , '$don_hang', '$_POST[ho_ten]', '$_POST[dia_chi]', '$_POST[email]', '$_POST[dien_thoai]', '$noi_dung', '$_POST[ten_dang_nhap]');	";
			mysql_query($chuoi);
			unset($_SESSION[$ten_danh_dau.'id_giohang']);
			unset($_SESSION[$ten_danh_dau.'soluong_giohang']);
			$_SESSION['jac_91']="co";
			thongbao("Hoá đơn đã được gửi thành công.\\nCảm ơn bạn đã mua hàng.");
		}
		else
		{
			thongbao("Không bỏ trông tên,điện thoại và Email.");
		}
	}
	else
	{
		thongbao("Cần đăng ký hoặc đăng nhập.");
		$_SESSION['jac_82']="co";
		trangtruoc();
		exit();
		//chuyentrang("?thamso=dang_ky");
	}
?>
