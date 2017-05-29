<?php

	$noi_dung = thay_the_fckeditor($_POST['noidung']);
	#echo $noi_dung;
	#echo $_POST['txtLienhe'];
	mysql_query("UPDATE lien_he SET noi_dung ='$noi_dung',mail ='$_POST[txtLienhe]'");
	#mysql_query("UPDATE lien_he SET noi_dung = '$_POST[txtLienhe] WHERE lien_he.id LIMIT 1; ");
?>