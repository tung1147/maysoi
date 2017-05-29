<style type="text/css">
      #botron {
            border-radius: 20px;
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
       }
    </style>
<?php
	$sql = "SELECT * FROM banner";
	$query = mysql_query($sql);
	$fetch = mysql_fetch_array($query);
	#echo $fetch['noi_dung'];
	echo "<img src=\"image/Banner/$fetch[noi_dung]\" border=\"0\" id=\"botron\" width=\"1100px\" height=\"150px\">";
?>