<?php
	#include("../../../ketnoi.php");
	#ini_set('display_errors', 0);
	#mysql_connect("localhost","camtuquanvn","123456");
	#mysql_select_db("dongphuong");
	#mysql_query('SET NAME "UTF8"');
	
	$tv="select * from duongdan_quanly";
	$tv_1= mysql_query($tv);
	
	#echo $a['duong_dan'];
	#echo "acb";
	while($ab=mysql_fetch_array($tv_1))
	{
		#echo "acb3<br>";
		if($_GET['thamso']==$ab['ten_tham_so'])
		{
			include($ab['duong_dan']);
			#echo "abc";
			#echo $a['duong_dan'];
		}
	}
?>