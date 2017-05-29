<?php
	$sql = "SELECT *FROM lien_he WHERE id ='1'";
	$query = mysql_query($sql);
	$fetch = mysql_fetch_array($query);
?>
<?php
	if($_POST['Ho_ten'] !="" and $_POST['Noi_dung'] !="")
	{
               # $header ="Người gửi :'$_POST['Ho_ten']' \n Địa chỉ : '$_POST['Dia_chi']'\n Email : '$_POST['Email']'\n Phone : '$_POST['Phone']'\n";
		$body = "Người gửi :'$_POST[Ho_ten]' \n Địa chỉ : '$_POST[Dia_chi]'\n Email : '$_POST[Email]'\n Phone : '$_POST[Phone]'\n Nội dung : '$_POST[Noi_dung]' " ;                
		mail('dongphuonghn@gmail.com','Mail khách hàng trang web maysoi.com.vn',$body,$header);
		thongbao("Gửi liên hệ thành công.");
	}
	else
	{
		thongbao("Không để trống tên và nội dung.");
	}
?>
