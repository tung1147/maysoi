<?php
$sql = "SELECT * FROM banner";
$query = mysql_query($sql);
$fetch = mysql_fetch_array($query);
#echo $fetch['noi_dung'];
echo "<img src=\"image/Banner/$fetch[noi_dung]\" border=\"0\" id=\"botron\" class=\"main-banner \">";
?>
