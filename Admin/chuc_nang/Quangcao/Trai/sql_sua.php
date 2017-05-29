<?php
	$image = $_FILES['img']['name']; 
	if($image !="")
	{
		$image = $_POST['img_old'];
		$image_trung = "Yes"; #lay dieu kien kiem tra anh co bi trung hay ko.
	}
	$cat_chuoi = explode(".",$image);
	$duoi_anh = $cat_chuoi[count($cat_chuoi)-1];
	$file_hop_le = "gif,png,bmp,jpg,jpeg,GIF,PNG,BMP,JPG,JPEG";
	$cat_chuoi_1 = explode(",",$file_hop_le);
	$anh_hop_le = "No";	
	#echo "1";			
	for($i=0;$i<count($cat_chuoi_1);$i++)
	{
		if($duoi_anh == $cat_chuoi_1[$i])
		{
			$anh_hop_le = "Yes";
		}	
	}
	if($anh_hop_le == "Yes")
	{
		#echo "2";
		$sql = "SELECT COUNT(*) quang_cao WHERE ten_file='$image' ";
		$query = mysql_query($sql);
		$row = mysql_fetch_row($query);
		if($row == 0 or $image_trung =="Yes")
		{
			#echo "3";
			$upload = "../image/Quangcao/".$image;
			move_uploaded_file($_FILES['img']['tmp_name'],$upload);#tai file len
			#$noi_dung = thay_the_fckeditor($_POST['noidung']);
			#echo $_POST['txtTen_san_pham'];
			#echo $image ;
			mysql_query("UPDATE quang_cao SET link = '$_POST[txtLien_ket]',ten_file ='$image' , rong= '$_POST[txtRong]' , cao= '$_POST[txtCao]' WHERE quang_cao.id =$_GET[id] LIMIT 1");
			
		}else
			{
					thongbao("Tên hình đã có.\\nChọn tên khác");
			}
			}else
			{
			thongbao("Đuôi file ảnh không hợp lệ.\\n File hợp lệ: $file_hop_le");
			}	
		
?>