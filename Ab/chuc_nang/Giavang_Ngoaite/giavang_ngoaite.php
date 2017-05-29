<div class="khung_td">
	<span>Gi&#225; v&#224;ng</span>
</div>
<div class="khung_nd">
	<center>
		<div class="cao_3_px"></div>
<?php
$link=file_get_contents("http://www.vnexpress.net/Service/Gold_Content.js");
$tygia=explode("'",$link);
echo("<center><table border=\"0\" style=\"border-collapse: collapse;font-size:12px\" bordercolor=\"#aeacad\">
<tr>
<td align=\"left\">");
echo("<table> 		<tr>
			<td colspan=\"3\" align=\"left\"><img src=\"image/Giaodien/giavang.gif\" border=\"0\"><span style=\"margin-left:5px;font-weight:bold;color:red\">Gi&#225; v&#224;ng :</span></td>


		</tr></table></center>");
		echo("<center><table border=\"1\" style=\"border-collapse: collapse;\" bordercolor=\"#a8a8a8\">

		<tr>
			<td width=\"44px\">Lo&#7841;i</td>
			<td width=\"44px\">Mua</td>
			<td width=\"44px\">B&#225;n</td>

		</tr>
		<tr>
			<td >SBJ</td>
			<td >$tygia[1]</td>
			<td >$tygia[3]</td>

		</tr><tr>
			<td >SJC</td>
			<td >$tygia[5]</td>
			<td >$tygia[7]</td>

		</tr>
		</table></center>");
		
		$link=file_get_contents("http://www.vnexpress.net/Service/Forex_Content.js");
		$tygia=explode("'",$link);

		echo('<table border="0" style="margin-left:0px"><tr><td align="left"><img src="image/Giaodien/tygia.gif" border="0"><span style="margin-left:5px;font-weight:bold;color:red"> T&#7927; gi&#225;:</span></td></tr></table><center>
		<div style="overflow-x: auto;overflow-y: auto;height:75px">');
		echo '<div style="width:5px;height:1px;overflow:hidden"></div>';
		echo("<table border=\"1\" width=\"120px\"style=\"border-collapse: collapse;\" bordercolor=\"#a8a8a8\">

<tr>
	<td width=\"80px\">USD</td>
	<td width=\"80px\">$tygia[3]</td>
</tr><tr>
	<td width=\"80px\">GBP</td>
	<td width=\"80px\">$tygia[7]</td>
</tr>

<tr>
	<td width=\"80px\">HKD</td>
	<td width=\"80px\">$tygia[11]</td>
</tr><tr>
	<td width=\"80px\">FRF</td>
	<td width=\"80px\">$tygia[15]</td>
</tr>

<tr>
	<td width=\"80px\">CHF</td>
	<td width=\"80px\">$tygia[19]</td>
</tr><tr>
	<td width=\"80px\">DEM</td>
	<td width=\"80px\">$tygia[23]</td>
</tr>

<tr>
	<td width=\"80px\">JPY</td>
	<td width=\"80px\">$tygia[27]</td>
</tr><tr>
	<td width=\"80px\">AUD</td>
	<td width=\"80px\">$tygia[31]</td>
</tr>

<tr>
	<td width=\"80px\">CAD</td>
	<td width=\"80px\">$tygia[35]</td>
</tr><tr>
	<td width=\"80px\">SGD</td>
	<td width=\"80px\">$tygia[39]</td>
</tr>

<tr>
	<td width=\"80px\">EUR</td>
	<td width=\"80px\">$tygia[43]</td>
</tr><tr>
	<td width=\"80px\">NZD</td>
	<td width=\"80px\">$tygia[47]</td>
</tr>
</table>");
		echo('</div>
		');
echo("</td></tr></table></center>");
?>
	<div class="cao_3_px"></div>
	</center>
</div>