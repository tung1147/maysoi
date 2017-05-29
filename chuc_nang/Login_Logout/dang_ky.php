
<style>
table.table_dangky
{
	border-collapse: collapse;
	border:0px solid #999999;
	margin:0px 0px 5px 0px;
	text-align:left;
	width:618px;
}
table.table_dangky td
{
	border:0px solid #999999;
}
table.table_dangky input
{
	width:300px;
}
table.table_dangky textarea
{
	width:400px;
	height:75px
}
</style>
<div class="display_td">
	<a href="#">&#272;&#259;ng k&#253; th&#224;nh vi&#234;n</a>
</div>
<div class="display_nd">
	<center>
		<?php
			if($check_login !="Yes")
			{
		?>
				<form action="" method="post">
					<table class="table_dangky">
						<tr>
							<td width="120px" align="right"><b>T&#234;n &#273;&#259;ng nh&#7853;p :</b></td>
							<td><input name="ho_ten"></td>
						</tr>
						<tr>
							<td align="right"><b>M&#7853;t kh&#7849;u :</b></td>
							<td><input name="mat_khau" type="password"></td>
						</tr>
						<tr>
							<td align="right"><b>Email :</b></td>
							<td><input name="email"></td>
						</tr>
						<tr>
							<td align="right"><b>Phone:</b></td>
							<td><input name="dien_thoai"></td>
						</tr>
						<tr>
							<td align="right"><b>&#272;&#7883;a ch&#7881; :</b></td>
							<td>
								<textarea name="dia_chi"></textarea>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>
								<input type="hidden" name="dang_ky_thanh_vien" value="dang_ky_thanh_vien">
								<input type="image" style="width:80px;border:0px solid red" src="image/Giaodien/dang_ky.gif">
							</td>
						</tr>
					</table>
				</form>
		<?php
			}
			else
			{
				echo "<div style='width:625px;text-align:left'>B&#7841;n &#273;&#227; &#273;&#259;ng nh&#7853;p</div>";
			}
		?>
	</center>
</div>