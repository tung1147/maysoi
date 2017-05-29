<?php
	switch($_GET['thamso'])
	{
		case"abc":
		break;
		case"lien_he":
			$title="Li&#234;n h&#7879;";
		break;
		case"dang_ky":
			$title="&#272;&#259;ng k&#253;";
		break;
		case"quen_mat_khau":
			$title="L&#7845;y l&#7841;i m&#7853;t kh&#7849;u";
		break;
		case"xem_don_hang":
			$title="Xem &#273;&#417;n h&#224;ng";
		break;
		case"chitiet_sanpham":
			$sql="select * from san_pham where id='$_GET[id]'";
			$query=mysql_query($sql);
			$fetch=mysql_fetch_array($query);
			$title=$fetch['ten'];
		break;
		case"xuat_san_pham":
			$sql="select * from menu where id='$_GET[id]'";
			$query=mysql_query($sql);
			$fetch=mysql_fetch_array($query);
			$title=$fetch['ten'];
		break;	
		default:
		 $title="Dong Phuong Hong Ha Noi Jsc.";
	}
?>
