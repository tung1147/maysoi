<?php
	#echo "222222";
	if($_POST['txtMenu_doc'] != ""){
		#echo "3333";
		$chuoi = "INSERT INTO menu VALUES(null,'$_POST[txtMenu_doc]' ,'doc','' ,'$_POST[cap_do]' )";	
		mysql_query($chuoi);
	}else{
		thongbao('Không được bỏ trống tên menu.');
	}
?>
