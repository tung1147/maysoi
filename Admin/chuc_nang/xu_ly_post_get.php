<?php
	if(isset($_POST['dangnhap_quantri']))
	{

		include("kiemtra_dangnhap.php");
		trangtruoc();
		exit();
	}
	
	if(isset($_POST['them_menu_doc']))
	{
		#echo "abc";
		include("chuc_nang/menu/menu_doc/sql_them.php");
		#echo "1";
		thongbao("Thêm menu thành công");
		trangtruoc();
		exit();
	}
	if(isset($_POST['sua_menu_doc']))
	{
		#echo "aaaaaaaa";
		include("chuc_nang/menu/menu_doc/sql_sua.php");
		#echo "1111111";
		thongbao("Sửa menu thành công");
		trangtruoc();
		exit();	
	}
	
	if($_GET['thamso']=="xoa_menu_doc")
	{
		include("chuc_nang/menu/menu_doc/xoa.php");
		trangtruoc();
		exit();
	}
	
	if(isset($_POST['them_menu_ngang']))
	{
		#echo $_POST[cap_do];
		include("chuc_nang/menu/menu_ngang/sql_them.php");
		#echo "b";	
		thongbao("Thêm menu thành công");
		trangtruoc();
		exit();
	}
	
	if(isset($_POST['sua_menu_ngang']))
	{
		#echo "aaaa";
		include("chuc_nang/menu/menu_ngang/sql_sua.php");
		thongbao("Sửa menu thành công");
		trangtruoc();
		exit();
	}
	
	if($_GET['thamso']=="xoa_menu_ngang")
	{
		include("chuc_nang/menu/menu_ngang/xoa.php");
		
		trangtruoc();
		exit();
	}
	
	if(isset($_POST['them_san_pham']))
	{
		#echo $_FILES['img']['name'];
		include("chuc_nang/San_pham/sql_them.php");
		#thongbao("Thêm sản phẩm thành công");
		trangtruoc();
		exit();
	}
	if(isset($_POST['sua_san_pham']))
	{
		#echo "a";
		include("chuc_nang/San_pham/sql_sua.php");
		#thongbao("Sửa sản phẩm thành công");
		trangtruoc();
		exit();
	}
	if($_GET['thamso'] == "xoa_san_pham")
	{
		include("chuc_nang/San_pham/xoa.php");
		trangtruoc();
		exit();
	}
	
	if(isset($_POST['sua_thanh_vien']))
	{
		#echo "a";
		include("chuc_nang/Member/sql_sua.php");
		thongbao("Sửa thành viên thành công");
		trangtruoc();
		exit();
	}
	if($_GET['thamso'] == "xoa_thanh_vien")
	{
		include("chuc_nang/Member/xoa.php");
		trangtruoc();
		exit();
	}
	
	if(isset($_POST['them_quang_cao_phai']))
	{
		#echo "a";
		include("chuc_nang/Quangcao/Phai/sql_them.php");
		thongbao("Thêm quảng cáo thành công");
		trangtruoc();
		exit();
	}
	if(isset($_POST['sua_quang_cao_phai']))
	{
		#echo "a";
		include("chuc_nang/Quangcao/Phai/sql_sua.php");
		thongbao("Sửa quảng cáo thành công");
		trangtruoc();
		exit();
	}
	if($_GET['thamso'] == "xoa_quang_cao_phai")
	{
		include("chuc_nang/Quangcao/Phai/xoa.php");
		trangtruoc();
		exit();
	}
	
	
	if(isset($_POST['them_quang_cao_trai']))
	{
		#echo "a";
		include("chuc_nang/Quangcao/Trai/sql_them.php");
		thongbao("Thêm quảng cáo thành công");
		trangtruoc();
		exit();
	}
	if(isset($_POST['sua_quang_cao_trai']))
	{
		#echo "a";
		include("chuc_nang/Quangcao/Trai/sql_sua.php");
		thongbao("Sửa quảng cáo thành công");
		trangtruoc();
		exit();
	}
	if($_GET['thamso'] == "xoa_quang_cao_trai")
	{
		include("chuc_nang/Quangcao/Trai/xoa.php");
		trangtruoc();
		exit();
	}
	if(isset($_POST['them_quang_cao_truot_trai']))
	{
		#echo "a";
		include("chuc_nang/Quangcao/Truot/Trai/sql_them.php");
		thongbao("Thêm quảng cáo thành công");
		trangtruoc();
		exit();
	}
	if(isset($_POST['sua_quang_cao_truot_trai']))
	{
		#echo "a";
		include("chuc_nang/Quangcao/Truot/Trai/sql_sua.php");
		thongbao("Sửa quảng cáo thành công");
		trangtruoc();
		exit();
	}
	if($_GET['thamso'] == "xoa_quang_cao_truot_trai")
	{
		include("chuc_nang/Quangcao/Truot/Trai/xoa.php");
		trangtruoc();
		exit();
	}
	
	if(isset($_POST['them_quang_cao_truot_phai']))
	{
		#echo "a";
		include("chuc_nang/Quangcao/Truot/Phai/sql_them.php");
		thongbao("Thêm quảng cáo thành công");
		trangtruoc();
		exit();
	}
	if(isset($_POST['sua_quang_cao_truot_phai']))
	{
		#echo "a";
		include("chuc_nang/Quangcao/Truot/Phai/sql_sua.php");
		thongbao("Sửa quảng cáo thành công");
		trangtruoc();
		exit();
	}
	if($_GET['thamso'] == "xoa_quang_cao_truot_phai")
	{
		include("chuc_nang/Quangcao/Truot/Phai/xoa.php");
		trangtruoc();
		exit();
	}
	if(isset($_POST['sua_lien_he']))
	{
		#echo "a";
		include("chuc_nang/Hotro/Lienhe/sql_lienhe.php");
		thongbao("Sửa liên hệ thành công");
		trangtruoc();
		exit();
	}
	
	if(isset($_POST['them_truc_tuyen']))
	{
		#echo "a";
		include("chuc_nang/Hotro/Tructuyen/sql_them.php");
		thongbao("Thêm trực tuyến thành công");
		trangtruoc();
		exit();
	}
	if(isset($_POST['sua_truc_tuyen']))
	{
		#echo "a";
		include("chuc_nang/Hotro/Tructuyen/sql_sua.php");
		thongbao("Sửatrực tuyến thành công");
		trangtruoc();
		exit();
	}
	if($_GET['thamso'] == "xoa_truc_tuyen")
	{
		include("chuc_nang/Hotro/Tructuyen/xoa.php");
		trangtruoc();
		exit();
	}
	
	if(isset($_POST['sua_quan_tri']))
	{
		#echo "a";
		include("chuc_nang/Quantri/sql_sua.php");
		thongbao("Sửa quản trị thành công");
		trangtruoc();
		exit();
	}
	if(isset($_POST['sua_banner']))
	{
		#echo "a";
		include("chuc_nang/Giaodien/Banner/sql_sua.php");
		#thongbao("Sửa banner thành công");
		trangtruoc();
		exit();
	}
	if(isset($_POST['sua_footer']))
	{
		#echo "a";
		include("chuc_nang/Giaodien/Footer/sql_sua.php");
		thongbao("Sửa footer thành công");
		trangtruoc();
		exit();
	}
	if($_GET['thamso']=="thoat")
	{
		unset($_SESSION[$ten_danh_dau."ky_danh"]);
		unset($_SESSION[$ten_danh_dau."mat_khau"]);
		chuyentrang("index.php");
		exit();
	}
	
	if(isset($_POST['media']))
	{
		#echo "a";
		include("chuc_nang/San_pham/sql_mediafile.php");
		
		trangtruoc();
		exit();
	}
	
?>
