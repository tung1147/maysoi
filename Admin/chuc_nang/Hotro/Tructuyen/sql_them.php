<?php
echo $_POST['txtTructuyen'];
	if($_POST['txtTructuyen'] != "")
	{	
		$chuoi ="INSERT INTO hotro_tructuyen(id,ten_nick) VALUES (null,'$_POST[txtTructuyen]')";
		mysql_query($chuoi);
	}
	else
	{
		thongbao("Cần điền nick trực tuyến.");
	}
?>