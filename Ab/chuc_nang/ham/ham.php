<?php
function chong_pha_hoai()
	{

	}
	function thongbao($a){
		echo '<script type="text/javascript" >alert("'.$a.'")</script>';
	}
	
	function chuyentrang($link)
	{

		?>
			<script type="text/javascript">
				setTimeout(function(){
				window.location="<?php echo $link;?>";
				},100);
			</script>
		<?php
		exit();
	}


	function flash($link,$rong,$cao)
	{
		?>
			<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="<?php echo $rong; ?>" height="<?php echo $cao; ?>">
			      <param name="wmode" value="transparent" />
				  <param name="movie" value="<?php echo $link; ?>" />
			      <param name="quality" value="high" />
			      <embed wmode="opaque" src="<?php echo $link; ?>" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="<?php echo $rong; ?>" height="<?php echo $cao; ?>"></embed>
	        </object>
		<?php
	}
	function thay_the_fckeditor($nd)
	{
		$chuoi_1="é è ẻ ẽ ẹ ý ỳ ỷ ỹ ỵ ú ù ủ ũ ụ ư ứ ừ ử ữ ự í ì ỉ ĩ ị ó ò ỏ õ ọ ô ố ồ ổ ỗ ộ á à ả ã ạ â ấ ầ ẩ ẫ ậ ă ắ ằ ẳ ẵ ặ ê ế ể ễ ệ ơ ớ ờ ở ỡ ợ";
		$chuoi_2="&eacute; &egrave; ẻ ẽ ẹ &yacute; ỳ ỷ ỹ ỵ &uacute; &ugrave; ủ ũ ụ ư ứ ừ ử ữ ự &iacute; &igrave; ỉ ĩ ị &oacute; &ograve; ỏ &otilde; ọ &ocirc; ố ồ ổ ỗ ộ &aacute; &agrave; ả &atilde; ạ &acirc; ấ ầ ẩ ẫ ậ ă ắ ằ ẳ ẵ ặ &ecirc; ế ể ễ ệ ơ ớ ờ ở ỡ ợ";
		$mang_1=explode(" ",$chuoi_1);
		$mang_2=explode(" ",$chuoi_2);
		for($i=0;$i<count($mang_2);$i++)
		{
			$nd=str_replace($mang_2[$i],$mang_1[$i],$nd);
		}
		$chuoi_3="É È Ẻ Ẽ Ẹ Ê Ế Ề Ể Ễ Ệ Ý Ỳ Ỷ Ỹ Ỵ Ú Ù Ủ Ũ Ụ Ư Ứ Ừ Ử Ữ Ự Í Ì Ỉ Ĩ Ị Ó Ò Ỏ Õ Ọ Ô Ố Ồ Ổ Ỗ Ộ Ơ Ớ Ờ Ở Ỡ Ợ Á À Ả Ã Ạ Â Ấ Ầ Ẩ Ẫ Ậ Ă Ắ Ằ Ẳ Ẵ Ặ";
		$chuoi_4="&Eacute; &Egrave; Ẻ Ẽ Ẹ &Ecirc; Ế Ề Ể Ễ Ệ &Yacute; Ỳ Ỷ Ỹ Ỵ &Uacute; &Ugrave; Ủ Ũ Ụ Ư Ứ Ừ Ử Ữ Ự &Iacute; &Igrave; Ỉ Ĩ Ị &Oacute; &Ograve; Ỏ &Otilde; Ọ &Ocirc; Ố Ồ Ổ Ỗ Ộ Ơ Ớ Ờ Ở Ỡ Ợ &Aacute; &Agrave; Ả &Atilde; Ạ &Acirc; Ấ Ầ Ẩ Ẫ Ậ Ă Ắ Ằ Ẳ Ẵ Ặ";
		$mang_3=explode(" ",$chuoi_3);
		$mang_4=explode(" ",$chuoi_4);
		for($i=0;$i<count($mang_3);$i++)
		{
			$nd=str_replace($mang_4[$i],$mang_3[$i],$nd);
		}
		return $nd;
	}
	
	
	
	function cat_chuoi_789($str,$ky_tu_dau,$ky_tu_cuoi)
	{
		$str=strip_tags($str);
		$str=thay_the_fckeditor($str);
		$split=1;
	    $array = array();
	    for ( $i=0; $i < strlen( $str ); ){
	        $value = ord($str[$i]);
	        if($value > 127){
	            if($value >= 192 && $value <= 223)
	                $split=2;
	            elseif($value >= 224 && $value <= 239)
	                $split=3;
	            elseif($value >= 240 && $value <= 247)
	                $split=4;
	        }else{
	            $split=1;
	        }
	            $key = NULL;
	        for ( $j = 0; $j < $split; $j++, $i++ ) {
	            $key .= $str[$i];
	        }
	        array_push( $array, $key );
	    }
	    $mang=$array;
		//print_r($mang);echo "<hr>";
		$chuoi_1="";
		for($i=$ky_tu_dau;$i<$ky_tu_cuoi;$i++)
		{
			$chuoi_1.=$mang[$i];
		}
		return $chuoi_1;
	}
	
	
	
	function xoa_phan_tu_mang_rong($mang)
	{
	//in_mang($mang);
	//xuat4(dem_mang($mang));
		$mang1=array_filter($mang);
		$tln=0;
		foreach($mang1 as $tieulongnu)
		{
			//xuat4($tieulongnu);
			$mang2[$tln]=$tieulongnu;
			$tln++;
		}
		//in_mang($mang2);
		return $mang2;
	}
function phathien_trinhduyet(){
		$thongtin_trinhduyet=$_SERVER['HTTP_USER_AGENT'];
		if(ereg("Firefox",$thongtin_trinhduyet))
		{
			$ten_trinhduyet="firefox";
		}
		else
		{
			if(ereg("MSIE 8.0",$thongtin_trinhduyet))
			{
				$ten_trinhduyet="ie8";
			}
			else
			{
				if(ereg("MSIE 7.0",$thongtin_trinhduyet))
				{
					$ten_trinhduyet="ie7";
				}
				else
				{
					if(ereg("MSIE 6.0",$thongtin_trinhduyet))
					{
						$ten_trinhduyet="ie6";
					}
					else
					{
						if(ereg("Chrome",$thongtin_trinhduyet))
						{
							$ten_trinhduyet="google";
						}
						else
						{
							if(ereg("Safari",$thongtin_trinhduyet))
							{
								$ten_trinhduyet="safari";
							}
							else
							{
								if(ereg("Opera",$thongtin_trinhduyet))
								{
									$ten_trinhduyet="opera";
								}
								else
								{
									$ten_trinhduyet="conlai";
								}
							}
						}
					}
				}
			}
		}
		return $ten_trinhduyet;
	}
	$trinh_duyet=phathien_trinhduyet();
	function trangtruoc()
	{

		$trinh_duyet=phathien_trinhduyet();
		switch($trinh_duyet)
		{
			case"opera":
				$tt=$_SERVER['HTTP_REFERER'];
				//Header("refresh: 0.1; url=$tt");
				chuyentrang($tt);
			break;
			default:
				echo "
				<script type=\"text/javascript\">
					setTimeout(function(){
					window.history.back();
					},100);
				</script>
				";

		}
		//history.go(-1)
		/*echo "
		<script type=\"text/javascript\">
			setTimeout(function(){
			window.history.back();
			},100);
		</script>
		";*/
		/*echo "
		<script type=\"text/javascript\">
			setTimeout(function(){
			window.history.go(-1);
			},100);
		</script>
		";*/
		exit();
	}

?>