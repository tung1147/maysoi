<?php
	#echo "Cai";
	$image = $_FILES['img']['name']; 
	$cat_chuoi = explode(".",$image);
	$duoi_hinh = $cat_chuoi[count($cat_chuoi)-1];
	$file_hop_le = "gif,png,bmp,jpg,jpeg,GIF,PNG,BMP,JPG,JPEG";
	$cat_chuoi_1 = explode(",",$file_hop_le);
	$anh_hop_le = "No";	
	#echo "1";			
	if($image !="")
		{
			for($i = 0; $i < count($cat_chuoi_1); $i++)
			{
				if($duoi_hinh==$cat_chuoi_1[$i])
				{
					$anh_hop_le="yes";
					break;
				}
			}
			if($anh_hop_le=="yes")
			{
				#echo "2";
				$sql = "SELECT COUNT(*) quang_cao WHERE ten_file='$image' ";
				$query = mysql_query($sql);
				$row = mysql_fetch_row($query);
				if($row[0]== 0)
				{
					#echo "3";
					$upload = "../image/Quangcao/".$image;
					
					move_uploaded_file($_FILES['img']['tmp_name'],$upload);#tai file len
					#$noi_dung = thay_the_fckeditor($_POST['noidung']);
					$chuoi = "INSERT INTO quang_cao VALUES(NULL,'truot_trai' ,'' ,'','$image' ,'$_POST[txtLien_ket]' ) ";
					mysql_query($chuoi);
				}else
				{
					thongbao("Tên hình đã có.\\nChọn tên khác");
				}
			}else
			{
			thongbao("Đuôi file ảnh không hợp lệ.\\n File hợp lệ: $file_hop_le");
			}	
		}else
		{
		thongbao("Bạn chưa upload ảnh sản phẩm.");
		}
	
	
?>