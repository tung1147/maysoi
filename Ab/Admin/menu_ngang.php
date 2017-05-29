

<div style="width: 500px"class="div_menu_ngang">
	<ul id="menu_ngang" class="menu_ngang" >
		<li><a href="index.php">Trang ch&#7911; </a></li>
		<li  >
			<a href="#">Menu</a>
			<ul>
				<li  >
					<a href="#">Th&#234;m menu</a>
					<ul>
						<li><a href="?thamso=them_menu_doc">Th&#234;m menu d&#7885;c</a></li>
						<li><a href="?thamso=them_menu_ngang">Th&#234;m menu ngang</a></li>
					</ul>
				</li>
				
				<li >
					<a href="#">Qu&#7843;n l&#253; menu</a>
					<ul>
						<li>	<a href="?thamso=quan_ly_menu_doc">Menu d&#7885;c</a></li>
						<li>	<a href="?thamso=quan_ly_menu_ngang">Menu ngang</a></li>
					</ul>
				</li>
			</ul>
		</li>
		
		<li  >
			<a href="#">Th&#224;nh vi&#234;n</a>
			<ul>
				<li><a href="?thamso=quan_ly_thanh_vien">Qu&#7843;n l&#253;</a></li>
				
			</ul>
		</li>

		<li>
			<a href="#">S&#7843;n ph&#7849;m</a>	
			<ul>
				<li>
					<a href="?thamso=them_san_pham">Th&#234;m s&#7843;n ph&#7849;m</a>
					
				</li>
				<li>
					<a href="?thamso=quan_ly_san_pham">Qu&#7843;n l&#253;</a>
					
				</li>
				<li><a href="?thamso=quan_ly_hoa_don">Ho&#225; &#273;&#417;n</a></li>
				<!--<li><a href="?thamso=quan_ly_trang_chu">S&#7843;n ph&#7849;m trang ch&#7911;</a></li>-->
			</ul>
		</li>
		<li>
			<a href="#">H&#7895; tr&#7907;</a>
			<ul>
				<li>
					<a href="?thamso=sua_lien_he">Li&#234;n h&#7879;</a>
				</li>
				<li>
					<a href="#">H&#7895; tr&#7907; tr&#7921;c tuy&#7871;n</a>
					<ul>
						<li>
							<a href="?thamso=them_truc_tuyen">Th&#234;m </a>				
						</li>
						<li>
							<a href="?thamso=quan_ly_truc_tuyen">Qu&#7843;n l&#253;</a>				
						</li>
					</ul>
				</li>
			</ul>
		</li>
		<li>
			<a href="#">Qu&#7843;ng c&#225;o</a>
			<ul>
				<li>
					<a href="#">Qu&#7843;ng c&#225;o tr&#225;i</a>
					<ul>
						<li>
							<a href="?thamso=them_quang_cao_trai">Th&#234;m</a>
						</li>
						<li>
							<a href="?thamso=quang_cao_trai">Qu&#7843;n l&#253;</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">Qu&#7843;ng c&#225;o ph&#7843;i</a>
					<ul>
						<li>
							<a href="?thamso=them_quang_cao_phai">Th&#234;m</a>
						</li>
						<li>
							<a href="?thamso=quang_cao_phai">Qu&#7843;n l&#253;</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">Qu&#7843;ng c&#225;o tr&#432;&#7907;t</a>
					<ul>
						<li>
							<a href="">Qu&#7843;ng c&#225;o tr&#225;i</a>
							<ul>
								<li>
									<a href="?thamso=them_quang_cao_truot_trai">Th&#234;m</a>
								</li>
								<li>
									<a href="?thamso=ql_quang_cao_truot_trai">Qu&#7843;n l&#253;</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="">Qu&#7843;ng c&#225;o ph&#7843;i</a>
							<ul>
								<li>
									<a href="?thamso=them_quang_cao_truot_phai">Th&#234;m</a>
								</li>
								<li>
									<a href="?thamso=ql_quang_cao_truot_phai">Qu&#7843;n l&#253;</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</li>
		<li>
			<a href="#">Giao di&#7879;n</a>
			<ul>
				<li>
					<a href="?thamso=sua_banner">Banner</a>
				</li>
				<li>
					<a href="?thamso=sua_footer">Footer</a>
				</li>
				
			</ul>
		</li>
		<li>
			<a href="#">Qu&#7843;n tr&#7883;</a>
			<ul>
				<li><a href="?thamso=sua_quan_tri">Thay &#273;&#7893;i qu&#7843;n tr&#7883;</a></li>
				<!--<li><a href="#">Qu&#7843;n l&#253;</a></li>-->
			</ul>
			
		</li>
		<li>
			<a href="?thamso=thoat">Tho&#225;t</a>
		</li>
	</ul>
	
	
	
</div>
<div style="clear:left"></div>
<script type="text/javascript">
	menu_ngang_quan_tri();
</script>
<?php
	if($trinh_duyet=="ie6")
	{
		?>
			<script type="text/javascript">
				fix_mnn_qt_ie6();
			</script>
		<?php
	}
?>

