<?php	
	$url="http://vnexpress.net/ListFile/Weather/$_GET[a].xml";
	$rss=simplexml_load_file($url);	
	$so_1=str_replace(".gif","",$rss->AdImg1);
	$so_2=str_replace(".gif","",$rss->AdImg2);
	$nhiet_do=$so_1.$so_2;
	$thoi_tiet=str_replace("<b>","",$rss->Weather);
	$thoi_tiet=str_replace("</b>","",$thoi_tiet);
	echo "Nhi&#7879;t &#273;&#7897; : $nhiet_do &#273;&#7897; C<br>";
	echo $thoi_tiet;
?>
