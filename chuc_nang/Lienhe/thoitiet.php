<?php
$dom=new DOMDocument('1.0','utf-8');//tao doi tuong dom
$dom->load('http://vnexpress.net/rss/tin-moi-nhat.rss') ;//muon lay rss tu trang nao thi ban khai bao day
$items = $dom->getElementsByTagName("item");//lay cac element co tag name la item va gan vao bien $items
echo "<div class='khung_td'><span>Tin tức</span></div>";

#echo"<div class="khung_nd"><center><div class="cao_3_px"></div><table>";
$stt=0;
foreach($items as $item)//lap
{
$stt=$stt+1; 
$titles=$item->getElementsByTagName('title');//lay cac element co tag name la title va gan vao bien $titles
$title=$titles->item(0);//lay ra gia tri dau tuien trong array $titles
$descriptions=$item->getElementsByTagName('description');
$des=$descriptions->item(0);

$links=$item->getElementsByTagName('link');
$link=$links->item(0);

echo	"

<div class='khung_nd'><center><div class='cao_3_px'></div><table>
<tr>
<td style='color:#FF0000; font-weight:bold; text-decoration:none'><a href='$link->nodeValue' />$title->nodeValue	 </td>
</tr>
<!--<tr>
<td>$des->nodeValue</td>
</tr>-->

";
if($stt==6)
{
exit();
}
}
echo "</table>";
?> 
