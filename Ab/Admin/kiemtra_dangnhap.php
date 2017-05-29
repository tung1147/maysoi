<?php

if ($_POST['ky_danh'] !=  "" ){
		$a = "SELECT COUNT(*) FROM thongtin_quantri WHERE  ky_danh = '$_POST[ky_danh]' AND mat_khau ='$_POST[mat_khau]'";
		$query = mysql_query($a);
		$b = mysql_fetch_row($query);
		if($b[0] !=0){
			$_SESSION[$ten_danh_dau."ky_danh"]=$_POST['ky_danh'];
			$_SESSION[$ten_danh_dau."mat_khau"]=$_POST['mat_khau'];
		}else
		{
			thongbao("Sai tên đăng nhập hoặc mật khẩu");
		} 
	}else
	{
		thongbao("Không được bỏ trống đăng nhập , mật khẩu");
	}
	
	/*if (empty($_POST['ky_danh'])){
		$kd = FALSE;
		echo"<p>Ban chu nhap ten dang nhap</p>";
	}else{
		$kd = $_POST['ky_danh'];
	}
	if(empty($_POST['mat_khau'])){
		$mk=FALSE;
		echo "<p>Ban chua nhap mat khau</p>";
	}else{
		$mk = $_POST['mat_khau'];
	}
	if($kd && $mk){
		$query = "SELECT ky_danh,mat_khau FROM thongtin_quantri WHERE ky_danh='$kd' AND mat_khau='$mk'";
		$result = @mysql_query($query);
		$row = mysql_fetch_array($result,MYSQL_NUM); 
		if($row){
			$_SESSION['ky_danh']=$row[1];
			$_SESSION['matkhau']=$row[0];
			#echo "Ban da dang nhap dung";
			#header("Location: http//" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "index_1.php");
			exit();
		}else{
			echo "<p>Ten dang nhap khong phu hop</p>";
			$xacdinh_dangnhap="khong";
		}
		mysql_close();
		
	}else{
		echo "Ban hay thu lai";
	}*/

?>
