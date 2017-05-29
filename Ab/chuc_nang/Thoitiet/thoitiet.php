<?php

?>
<script type ="text/javascript" >
	function thoi_tiet (a)
	{
		var url = "http://vnexpress.net/ListFile/Weather/"+a+".xml";
		ajax_innerHTML("chuc_nang/Thoitiet/tt.php?a="+a,"thoi_tiet");
	}
</script>
<div class="khung_td">
	<span>Th&#7901;i ti&#7871;t</span>
</div>
<div class="khung_nd">
	<center>
		<div class="cao_3_px"></div>
		<table>
			<tr>
				<td align="left" height="25px"><b>T&#7881;nh</b></td>
				<td align="left">
						<select onchange="thoi_tiet(this.value)" style="">						
						<option value="haiphong">H&#7843;i ph&#242;ng</option>
						<option value="hanoi">H&#224; n&#7897;i</option>						
						<option value="danang">&#272;&#224; n&#7861;ng</option>
						<option value="nhatrang">Nha trang</option>						
						<option value="hcm" selected>TP HCM</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="left">
					<div id="thoi_tiet" style="font-size: 12px"></div>
				</td>
			</tr>
		</table>
	</center>
</div>
<script type="text/javascript">
	ajax_innerHTML("chuc_nang/thoi_tiet/tt.php?a=hcm","thoi_tiet");
</script>