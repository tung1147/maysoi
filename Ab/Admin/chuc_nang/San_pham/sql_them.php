<?php
#echo "aaaaa";
	#lay gia tri cua menu con 
$_SESSION[$ten_danh_dau."cap_do"] = $_POST['cap_do'];
	#Dieu kien nhap vao cu ten san pham
	#echo $_POST['cap_do'];
	#echo $_POST['txtThem_san_pham'];
if($_POST['txtThem_san_pham'] !="")
{	
	$image = $_FILES['img']['name']; 
	$cat_chuoi = explode(".",$image);
	$duoi_hinh = $cat_chuoi[count($cat_chuoi)-1];
	$file_hop_le = "gif,png,bmp,jpg,jpeg,GIF,PNG,BMP,JPG,JPEG";
	$cat_chuoi_1 = explode(",",$file_hop_le);
	$anh_hop_le = "No";	
	
	##echo $brochure;	*/
	$brochure = $_FILES['brochure']['name']; 
	$cat_file = explode(".",$brochure);
	$duoi_file = $cat_file[count($cat_file)-1];
	$file_hop_le_1 = "doc,docx,xls,pdf";
	$cat_file_1 = explode(",",$file_hop_le_1);
	#$anh_hop_le = "No";	
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
				$sql = "SELECT COUNT(*) san_pham WHERE hinh_anh='$image' ";
				$query = mysql_query($sql);
				$row = mysql_fetch_row($query);
				if($row[0]== 0)
				{
					#echo "3";
					$upload = "../image/San_pham/".$image;					
					move_uploaded_file($_FILES['img']['tmp_name'],$upload);#tai file len
					
					$upload_1 = "../image/Tai_lieu/".$brochure;					
					move_uploaded_file($_FILES['brochure']['tmp_name'],$upload_1);
					
					$noi_dung = thay_the_fckeditor($_POST['noidung']);
					
					/*echo $_POST['txtThem_san_pham'];
					ECHO "<BR>";
					echo $noi_dung;
					ECHO "<BR>";
					echo $image;
					ECHO "<BR>";
					echo $brochure;
					ECHO "<BR>";
					ECHO $_POST['txtGia_sp'];
					ECHO "<BR>";
					ECHO $_POST['cap_do'];
					ECHO "<BR>";
					ECHO $_POST['selTrangchu'];
					ECHO "<BR>";
					ECHO $_POST['txtXuat_xu'];
					ECHO "<BR>";
					ECHO "<BR>";
					ECHO $_POST['txtBao_hanh'];*/
					$chuoi = "INSERT INTO san_pham VALUES(NULL,'$_POST[txtThem_san_pham]' ,'$noi_dung' ,'$image','$brochure','$_POST[txtGia_sp]' ,'0','0','$_POST[cap_do]','$_POST[selTrangchu]','$_POST[txtXuat_xu]','$_POST[txtBao_hanh]','0903228633')";
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
	}else
	{
		thongbao("Bạn không được bỏ trống tên sản phẩm mới.");
	}
	
?>
