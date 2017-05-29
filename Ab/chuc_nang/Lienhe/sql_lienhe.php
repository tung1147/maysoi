<?php
	$sql = "SELECT *FROM lien_he WHERE id ='1'";
	$query = mysql_query($sql);
	$fetch = mysql_fetch_array($query);
?>
<?php
	if($_POST['Ho_ten'] !="" and $_POST['Noi_dung'] !="")
	{
		echo  $fetch['mail'];
		$_POST['Noi_dung'] = nl2br($_POST['noi_dung']);
		$a ="
		H&#7885; t&#234;n: $_POST[Ho_ten]<br>
		Email: $_POST[Email]<br>
		&#272;&#7883;a ch&#7881;: $_POST[Dia_chi]<br>
		Phone: $_POST[Phone]<br>
		<center><h1 style=\"color:red\">N&#7897;i dung</h1></center>
		$_POST[Noi_dung]";
		$to = $fetch['mail'];// lay ten email lien he
		$subject = 'Kh&#225;ch h&#224;ng g&#7917;i Email';
		$message = $a;
		$headers = 'Content-type: text/html;charset=utf-8';
		mail($to,$subject,$message,$headers);
		thongbao("G?i liên h? thành công.");
	}
	else
	{
		thongbao("Không d? tr?ng tên và n?i dung.");
	}
?>