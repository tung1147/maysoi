<?php
	#lay gia tri cua menu con 

	#Dieu kien nhap vao cu ten san pham
	#echo $_POST['cap_do'];
	
	#echo $_POST['txtTen_san_pham'];
	
if($_POST['txtTen_san_pham'] != "")
{		
	$image = $_FILES['img']['name']; 
	$file = $_FILES['brochure']['name'];
	/*if($image !="")
	{
		$image = $_POST['hinh_anh'];
		$image_trung = "Yes"; #lay dieu kien kiem tra anh co bi trung hay ko.
	}*/
	$cat_chuoi = explode(".",$image);
	$duoi_anh = $cat_chuoi[count($cat_chuoi)-1];
	$file_hop_le = "gif,png,bmp,jpg,jpeg,GIF,PNG,BMP,JPG,JPEG";
	$cat_chuoi_1 = explode(",",$file_hop_le);
	$anh_hop_le = "No";	
	#echo "1";	
	
	$cat_chuoi_file = explode(".",$file);
	$duoi_file = $cat_chuoi_file[count($cat_chuoi_file)-1];
	$file_hop_le_file = "pdf,doc";
	$cat_chuoi_1_file = explode(",",$file_hop_le_file);
	$file_hop_le = "No";	
	
	
	
			
	for($i=0;$i<count($cat_chuoi_1);$i++)
	{
		if($duoi_anh == $cat_chuoi_1[$i])
		{
			$anh_hop_le = "Yes";
                        break;
		}	
	}

	if($anh_hop_le =="Yes")
	{
		#echo "2";
		$sql = "SELECT COUNT(*) san_pham WHERE hinh_anh='$image' ";
		$query = mysql_query($sql);
		$row = mysql_fetch_row($query);
		if($row == 0 or $image_trung =="Yes")
		{
			#echo "3";
			$upload = "../image/San_pham/".$image;
			move_uploaded_file($_FILES['img']['tmp_name'],$upload);#tai file len
			#$noi_dung = thay_the_fckeditor($_POST['noidung']);
			#echo $_POST['txtTen_san_pham'];
			#echo $image ;
			
			$upload_file = "../image/Tai_lieu/".$file;
			move_uploaded_file($_FILES['brochure']['tmp_name'],$upload_file);#tai file len
			#$noi_dung = thay_the_fckeditor($_POST['noidung']);
                        $a =$_POST['txtNoidung'];
			$a = str_replace("'","^",$a);	
			$chuoi ="UPDATE san_pham SET ten = '$_POST[txtTen_san_pham]',noi_dung = '$a',hinh_anh ='$image',brochure='$file', gia = '$_POST[txtGia_sp]',trang_chu = '$_POST[selTrangchu]',xuat_xu = '$_POST[txtXuat_su]',bao_hanh = '$_POST[txtBao_hanh]' WHERE san_pham.id =$_GET[id] LIMIT 1";
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
		thongbao("Không được bỏ trống tên sản phẩm.");
		}
	
	
?>
