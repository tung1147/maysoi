<?php
	if($_POST['txtTructuyen'] !="")
	{
		$chuoi ="UPDATE hotro_tructuyen SET  ten_nick ='$_POST[txtTructuyen]' WHERE hotro_tructuyen.id='$_GET[id]' LIMIT 1";
		mysql_query($chuoi);
	}
	else
	{
		thongbao("Không được bỏ trống tên nick");
	}
?>