<?php
	session_start();
	ini_set('display_errors', 0);
	include("../ketnoi_host.php");
	include("../ketnoi.php");
	include("../chuc_nang/ham/ham.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link  rel="stylesheet" type="text/css" href="CSS/style.css"/>
<script type="text/javascript" src="CSS/js.js"></script>
<script type="text/javascript" src="fckeditor/fckeditor.js"></script>
<title>Quan ly</title>

</head>
<body>

	<?php
		include("xacdinh_dangnhap.php");
		include("chuc_nang/xu_ly_post_get.php");
		
	?>
	<style type="text/css">
	input
	{
		border:1px solid #cccccc
	}
	div
	{
		/*-moz-border-radius:8px;
		-webkit-border-radius:8px;*/
	}
	div.div_quanly
	{
		width:958px;
		border-left:1px solid #cccccc;
		border-right:1px solid #cccccc;
		text-align:left
	}
</style>
<center>
	<img  src="../image/Giaodien/banner_quantri.jpg" style="margin-top: 0px;margin-bottom: -4"/>
	
	<div class="div_quanly">
			<?php
				if($xacdinh_dangnhap !="co")
				{
					include("dang_nhap.php");
				}
				else
				{
					include("index_1.php");
				}
			?>
		</div>
		<img src="../image/Giaodien/bt_d_ql.jpg" style="margin-top: 0;max-width: 958px">
</center>
</body>
</html>
