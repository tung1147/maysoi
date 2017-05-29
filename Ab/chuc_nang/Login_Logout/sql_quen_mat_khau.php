<?php
	#echo $_POST['ten'];
	$sql="select * from thanh_vien where ten_dang_nhap='$_POST[ten]'";
	$query=mysql_query($sql);
	$fetch=mysql_fetch_array($query);
	if($_POST['ten'] !="")
	{
		 
		#echo $fetch_1[0];
		if(mysql_num_rows($query) != 0)
		{
			$tinnhan="
				<b>M&#7853;t kh&#7849;u c&#7911;a b&#7841;n:</b> $fetch[mat_khau]
			";
			$to      = $fetch['email'];// lay ten email
			$subject = 'L&#7845;y l&#7841;i m&#7853;t kh&#7849;u';
			$message = $tinnhan;
			$headers = 'Content-type: text/html;charset=utf-8';
			mail($to, $subject, $message, $headers);
			//echo $tinnhan;
			//thongbao("dung lai");
			thongbao("Đã gửi mật khẩu vào email của bạn");
		}
		else
		{
			thongbao("Không có ký danh này , mời bạn nhập lại");
		}
	}
	else
	{
		thongbao("Không được bỏ trống ký danh");
	}
?>
