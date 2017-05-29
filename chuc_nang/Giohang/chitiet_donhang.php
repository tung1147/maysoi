
<style>
	span.h81
	{
		font-weight:bold;
		color:white;
		padding:2px 0px 2px 0px;
	}
	span.h82
	{
		font-weight:bold;
		color:white;
		padding:2px 0px 2px 0px;
		margin-left:5px
	}
	table.gh_125
	{
		border-collapse: collapse;
		border:1px solid #999999;
		margin:5px 0px 5px 0px;
		text-align:left
	}
	table.gh_125 td
	{
		border:1px solid #999999
	}
	table.gh_125 input
	{
		margin-left:5px
	}
	table.gh_126
	{
		border-collapse: collapse;
		border:1px solid #999999;
		margin:0px 0px 5px 0px;
		text-align:left;
		width:618px

	}
	table.gh_126 td
	{
		border:1px solid #999999
	}
	span.ppp_23
	{
		font-weight:bold;
		color:white;
		padding:2px 0px 2px 0px;
		margin-left:5px
	}
	table.gh_126 input
	{
		margin:2px 2px 2px 2px;
		width:300px
	}
	table.gh_126 textarea
	{
		width:400px;
		height:75px;
		margin:2px 2px 2px 2px;
	}
	table.gh_126 b
	{
		margin-left:5px
	}
</style>
<?php
	#echo $id_sp;
	#echo "----------------------";
	 class xem_gio_hang{
	 	function mang_san_pham($id_sp)
		{
	 		$sql="select * from san_pham where id='$id_sp'";
	 		$query=mysql_query($sql);
	 		$fetch=mysql_fetch_array($query);
			
			return $fetch;
	 	}
	 	function xem($ten_danh_dau)
		{

	 		?>
					<div class="display_td">
						<a href="#">Giỏ hàng</a>
					</div>
				<?php
					//print_r($_SESSION);echo "<hr>";
					#echo count($_SESSION[$ten_danh_dau.'id_giohang']);echo "<hr>";
					//echo $ten_danh_dau.'id_giohang';echo "<hr>";
						if(count($_SESSION[$ten_danh_dau.'id_giohang'])==0)
						{
							?>
								<div class="display_nd" >
									Không có sản phẩm trong giỏ hàng
								</div>
							<?php
						}
						else
						{
							?>
								<div class="display_nd">
									<center>
										<form action="" method="post">
											<input type="hidden" name="cap_nhat_gio_hang_abc" value="cap_nhat_gio_hang_abc">
											<table class="gh_125">
												<tr bgcolor="#676767">
													<td width="50px" bgcolor="#CC6600" align="center"><span class="h81">STT</span></td>
													<td width="220px" bgcolor="#CC6600"><span class="h82">Tên sản phẩm</span></td>
													<td width="100px" bgcolor="#CC6600"><span class="h82">Số lượng</span></td>
													<td width="110px" bgcolor="#CC6600"><span class="h82">Giá (USD)</span></td>
													<td width="122px" bgcolor="#CC6600"><span class="h82">Tổng số (USD)</span></td>
												</tr>

											<?php
													$tong_so_lon=0;
													$j=0;
													for($i=0;$i<count($_SESSION[$ten_danh_dau.'id_giohang']);$i++)
													{
														$name="cngh_abc__$i";
			
														$id_sp=$_SESSION[$ten_danh_dau.'id_giohang'][$i];
														$sl_sp=$_SESSION[$ten_danh_dau.'soluong_giohang'][$i];
														if($sl_sp!=0)
														{
															$j=$j+1;
														}
														
														$mang_san_pham=$this->mang_san_pham($id_sp);
														$ten_san_pham=$mang_san_pham['ten'];
														if($mang_san_pham['gia']!=0)
														{
															
															#echo $ten_san_pham;
															$gia_ban=$mang_san_pham['gia'];
															#echo $mang_san_pham['gia'];
															$gia_ban_1=number_format($gia_ban,0,".",".");
															$tong_so=$gia_ban*$sl_sp;
															$tong_so_1=number_format($tong_so,0,".",".");
															$tong_so_lon=$tong_so_lon+$tong_so;
														}
														else
														{
															echo "2";
															#$mang_san_pham=$this->mang_san_pham($id_sp);
															echo $ten_san_pham;
															#$ten_san_pham=$mang_san_pham['ten'];
															$gia_ban_1=$mang_san_pham['gia'];
															echo $mang_san_pham['gia'];
															$gia_ban_1=number_format($gia_ban,0,".",".");
															$tong_so=$gia_ban*$sl_sp;
															$tong_so_1=number_format($tong_so,0,".",".");
															$tong_so_lon=$tong_so_lon+$tong_so;
														}
														if($sl_sp!=0)
														{
															?>
															<tr bgcolor="#ececec">
																<td width="50px" align="center"><?php echo $j; ?></td>
																<td width="220px"><?php echo $ten_san_pham; ?></td>
																<td width="100px"><input value="<?php echo $sl_sp; ?>" size="5" name="<?php echo $name; ?>"/></td>
																<td width="110px"><?php echo $gia_ban_1; ?></td>
																<td width="122px"><?php echo $tong_so_1; ?></td>
															</tr>
															<?php
														}
													}
													$tong_so_lon_1=number_format($tong_so_lon,0,".",".");
											?>
												<tr>
													<td width="50px">&nbsp;</td>
													<td width="220px">&nbsp;</td>
													<td width="100px"><input type="image" src="image/Giaodien/capnhat_giohang.gif" style="margin:2px 0px 2px 5px;border:0px solid red"></td>
													<td width="110px"&nbsp;</td>
													<td width="122px"><b style="color:#a42e2e;"><?php echo $tong_so_lon_1; ?></b></td>
												</tr>
											</table>
										</form>
									</center>
									<center>
										<form action="" method="post">
											<table class="gh_126">
												<tr bgcolor="#676767">
													<td colspan="2" bgcolor="#CC6600"><span class="ppp_23">Vui lòng điền đầy đủ các thông tin bên dưới</span></td>
												</tr>
												<tr>
													<td width="120px"><b>Họ và tên :</b> </td>
													<td width="498px"><input name="ho_ten"></td>
												</tr>
												<tr>
													<td width="120px"><b>T&#234;n &#273;&#259;ng nh&#7853;p:</b> </td>
													<td width="498px"><input name="ten_dang_nhap"></td>
												</tr>
												<tr>
													<td><b>Địa chỉ :</b></td>
													<td><input name="dia_chi"></td>
												</tr>
												<tr>
													<td><b>Hòm thư :</b></td>
													<td><input name="email"></td>
												</tr>
												<tr>
													<td><b>Điện thoại :</b></td>
													<td><input name="dien_thoai"></td>
												</tr>
												<tr>
													<td><b>Nội dung :</b></td>
													<td><textarea name="noi_dung"></textarea></td>
												</tr>
												<tr>
													<td>&nbsp;</td>
													<td>
													<input type="hidden" name="gui_don_hang_abc" value="gui_don_hang_abc">
													<input type="image" src="image/Giaodien/thanh_toan.gif" style="width:100px;_margin-bottom:-2px;border:0px solid red">

													</td>
												</tr>
											</table>
										</form>
									</center>
							<?php
						}
				?>

			<?php
	 	}
	 }
?>
<?php
	$xem_gio_hang=new xem_gio_hang;
	$xem_gio_hang->xem($ten_danh_dau);
?>
