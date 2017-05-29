<?php
	#echo "A&#194;AAA";
	#$noi_dung = thay_the_fckeditor($_POST['noidung']);
	$banner = $_FILES['banner']['name']; 
	#echo $banner;
	$cat_chuoi = explode(".",$banner);
	$duoi_hinh = $cat_chuoi[count($cat_chuoi)-1];	
	$cat_chuoi_1 = explode(",",$file_hop_le);
	$anh_hop_le = "No";	
	$upload = "../image/Banner/".$banner;					
	move_uploaded_file($_FILES['banner']['tmp_name'],$upload);
	mysql_query("UPDATE banner SET noi_dung ='$banner' WHERE banner.id='1' LIMIT 1");
?>