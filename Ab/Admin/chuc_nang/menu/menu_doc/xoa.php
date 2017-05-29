<?php
	/**
* Nguyên tắc xoá menu :
* 1.Kiểm tra menu bị xoá có menu con hay không.
* 2.Kiểm tra menu bị xoá có sản phẩm không.
* Nếu không có menu con và sản phâm thì có thể xoá menu
* Không thoả mãn 2 điều kiện trên thì không được xoá
*/
	$id = $_GET['id'];
	#echo  $id;
	$a = "SELECT COUNT(*) FROM menu WHERE thuoc_menu = '$id'";
	$query = mysql_query($a);
	$row = mysql_fetch_row($query);
	#echo $row[0];
	if ($row[0] == 0){
		$sql = "SELECT COUNT(*) FROM san_pham WHERE thuoc_menu='$id'";
		$querys = mysql_query($sql);
		$rows = mysql_fetch_row($querys);
		if($rows[0] == 0){
			echo "AAAAA";
			$xoa = "DELETE FROM menu WHERE menu.id = '$id' LIMIT 1";
			mysql_query($xoa);
		}else{
			thongbao("Menu này có chứ sản phẩm. Nên không thể xoá.");
		}
		
	}else{
		thongbao("Menu này có chứ menu con. Nên không thể xoá.");
	}
?>