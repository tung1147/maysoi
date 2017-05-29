<?php

?>
	<style>
				div.danhnhap
				{
					margin-left:10px;
					color:red;
				}
				div.danhnhap span
				{
					color:blue;
					font-weight:bold;
					font-size:18px
				}
				div.danhnhap a
				{
					color:red
				}
				div.danhnhap a:hover
				{
					text-decoration: underline;
				}
			</style>
<div class="khung_td">
	<span><?php echo $lang['dangnhap']; ?></span>
</div>
<div class="khung_nd">
	<div class="cao_3_px"></div>
	<?php
	#echo $_SESSION[$ten_danh_dau.'ky_danh'];
	#echo $check_login;
		if($check_login != "Yes")
		{
	?>	
			<form action="" method="post">
				<center>
					<input style="width:120px;" value="T&#234;n &#273;&#259;ng nh&#7853;p" name="ky_danh" onfocus="if (this.value=='T&#234;n &#273;&#259;ng nh&#7853;p'){this.value=''};this.style.backgroundColor='#fffde8';" onblur="this.style.backgroundColor='#ffffff';">
					<div class="cao_3_px"></div>
					<input type="password" style="width: 120px;" value="matkhau" name="mat_khau" onfocus="if (this.value=='matkhau'){this.value=''};this.style.backgroundColor='#fffde8';" onblur="this.style.backgroundColor='#ffffff';">
					<div class="cao_3_px"></div>
				</center>
				<div style="margin-left: 18px">
					<input type="hidden" name="dangnhap" value="dangnhap"/>
					<input type="image" src="image/Giaodien/dang_nhap.jpg" style="border: 0px solid red"/>
					<br>
					<a href="?thamso=dang_ky" class="link_1">&#272;&#259;ng k&#253;</a>
					<br>
					<a href="?thamso=quen_mat_khau" class="link_1">Qu&#234;n m&#7853;t kh&#7849;u</a>
				</div>
			</form>
	<?php
		}
		else
		{
	?>
			<div class="danhnhap">
				Hi! <span><?php echo $_SESSION[$ten_danh_dau.'ten_dang_nhap'];?></span>
				<div class="cao_3_px"></div>
				<!--<a href="?thamso=sua_thong_tin">S&#7917;a th&#244;ng tin</a>-->
				<a href="?thamso=thoat">Tho&#225;t</a><br>
			</div>
	<?php
		}
	?>
	<div class="cao_3_px"></div>
</div>
