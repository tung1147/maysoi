<!--<script type="text/javascript">
	chuyen_trang(a);
</script>-->
<?php
#code tim kiem
/*if ($_GET['tim_kiem'] != ""){
	$tk = explode("",trim($_GET['tim_kiem']));
	$tk = xoa_phan_tu_mang_rong($tk);
	$a = "";
	for($i=0;$i< count($tk)-1;$i++){
		$a = $a."ten like '%$tk[$i]%' or";
	}
	$b = count($tk)-1;
	$a = $a."ten like '%$tk[$b]%'";
	$chuoi_tk = $a;
	$chuoi_kt = "($chuoi_kt) and ";
}else{
	$chuoi_kt ="";
}
function phan_trang ($st)
{
	echo "<center>";
	if($_GET['page'] !="")
	{
		if(ereg("&page=",$_SERVER['REQUEST_URI']))
		{
			$_SERVER['REQUEST_URI'] = str_replace("&page","",$_SERVER['REQUEST_URI']);
			$_SERVER['REQUEST_URI']=substr($_SERVER['REQUEST_URI'],0,-strlen($_GET['page']));
			$a = $_SERVER['REQUEST_URI']."&page=";	
		}else{
			$a = $_SERVER['REQUEST_URI']."&page=";
		}
	}
	else{
		$_SERVER['REQUEST_URI']= str_replace("&page=","",$_SERVER['REQUEST_URI']);
		$a=$_SERVER['REQUEST_URI']."&page=";
	}
	if($_GET['page'] !="" and $_GET['page'] = "1")
	{
		if($_GET['page'] =="" or $_GET['page']==1)
		{
			$p = 1;
		}
		else
		{
			$p = $_GET['page']-1;
		}
		$link_t = $a.$k;
		$link_d = $a."1";
		echo '<a href="'.$link_d.'"style="margin-right:10px">&#272;&#7847;u</a>';
		echo '<a href="'.$link_t.'"style="margin-right:10px">Tr&#432;&#7899;c</a>';
	}
	if($_GET['page']=="")
	{
		$b=1;
	}
	else
	{
		$b=$_GET['page'];
	}
	$c_1 = $_GET['page']-5;
	$n_1 = $c_1;
	if($c_1<1)
	{
		$c_1=1;
	}
	$c_2 = $_GET['page']+5;
	if($c_2>$st)
	{
		$n_2=$c_2;
		$c_2=$st;
	}
	if($n_1<0)
	{
		$v_1=(-1)*$n_1;
		$c_2=$c_2+$v_1;
	}
	if($n_2>=$st)
	{
		$v_2=$n_2-$st;
		$c_1=$c_1-$v_2;
	}
	if($c_1>0)
	{
		echo '...';
	}
	for($i=$c_1;$i<=$c_2;$i++)
	{
		$a_1=$a.$i;
		if($i>0 && $i<=$st)
		{
			if($i !=$d)
			{
				?>
				<a href="<?php echo $a_1;?>"><?php echo $i;?></a>
				<?php
			}
			else
			{
				echo "<b style=\"color:red\">$i<b>";
			}
		}
	}
	if($c_2<$st)
	{
		echo '...';
	}
	if($_GET['page'] !=$st && $st !=1)
	{
		if($_GET['page']==$st)
		{
			$k=$st;
		}
		else
		{
			$k=$_GET['page']+1;
			if($_GET['page']=="")
			{
				$k=2;
			}
		}
		$link_s = $a.$k;
		$link_cuoi = $a.$st;
		echo '<a href="'.$link_s.'" style="margin-left:10px" >Sau</a>';
			echo '<a href="'.$link_cuoi.'" style="margin-left:10px" >Cuối</a>';
	}
	echo "</center>";
}



function check_menucon ($id)
{
	$sql = "select count(*) FROM menu WHERE thuoc_menu='$id'";
	$query = mysql_query($sql);
	$row = mysql_fetch_row($query);
	if($row[0] !=0)
	{
		return "Yes";
	}
	else
	{
		return"No";
	}
}
function check_option ($id,$num)
{
	$num++;
	$kt="";
	for($i=1;$i<=$num;$i++)
	{
		$kt =$kt."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	}
	$sql = "SELECT  *FROM  menu WHERE vitri_menu='doc' and thuoc_menu='$id' ORDER BY id ";
	$query = mysql_query($sql);
	while($array=mysql_fetch_array($query))
	{
		if($_GET['id']==$array['id'])
		{
			$sl ='selected';
		}
		else
		{
			$sl="";
		}	
		echo "<option value=\"$array[id]\"$sl>";
		echo $kt;
		echo $array['ten'];
		echo "</option>";
		$check_menucon = check_menucon($array['id']);
		if($check_menucon = "Yes")
		{
			check_option($array['id'],$num);
		}
	}
	#echo "</select>";
}
function option()
{
	$sql = "SELECT *FROM  menu WHERE vitri_menu='doc' and thuoc_menu='' ORDER BY id";
	$query = mysql_query($sql);
	echo "<select name=\"cap_do\" onchange=\"chuyen_trang(this.value)\">";
	while($array=mysql_fetch_array($query)){
		if($_GET['id'] == $array['id'])
		{
			$sl ="selected";
		}
		else
		{
			$sl="";
		}
		echo "<option value=\"$array[id]\" $sl>";
		#echo $kt;
		echo $array['ten'];
		echo "</option>";
		$check_menucon = check_menucon($array['id']);
		if($check_menucon=="Yes")
		{
			check_option($array['id'],0);
		}
	}
	echo "</select>"
}

function menu_con($id_cha,$chuoi)
{
	$sql = "SELECT * FROM  menu WHERE thuoc_menu='$id_cha' ORDER BY id";
	$query = mysql_query($sql);
	while($array = mysql_fetch_array($query)){
		$chuoi= $chuoi.$array['id'].",";
		$sql_1 = "SELECT COUNT(*) FROM  menu WHERE thuoc_menu='$id_cha'";
		$query_1 = mysql_query($sql_1);
		$row_1 = mysql_fetch_row($query_1);
		if($row_1[0] !=0)
		{
			$chuoi = menu_con($array['id'],$chuoi);
		} 
	}
	return $chuoi;
}

function check_id_menu_con ($id_menu)
{
	if ($id_menu !="")
	{
		$chuoi = $id_menu.",";
	}
	else
	{
		$chuoi ="";
	}
	$menu_con = menu_con($id_menu,$chuoi);
	$m = explode(",",$menu_con);
	unset($m[count($m)-1));
	return $m;
}

function dem_bcd($id,$chuoi_or)
{
	$sql_2 = "SELECT COUNT (*) FROM  san_pham WHERE $chuoi_or thuoc_menu='$id'";
	$query_2 = mysql_query($sql_2);
	$row_2 = mysql_fetch_row($query_2);
	return $row_2[0];
}

?>

<?php
	$sd =10;
	$so_gioi_han = $sd;
	if($_GET['page']=="")
	{
		$vtbd =0;
	}
	else
	{
		$vtbd=($_GET['page']-1)*$sd;
	}
	$id =$_GET['id'];
	$check_id_menu_con = check_id_menu_con($id);
	$tsd_sql = 0;
	$chuoi ="";
	for($i=0;$i<count($check_id_menu_con);$i++)
	{
		$id = $check_id_menu_con[$i];
		$num=dem_bcd($id,$chuoi_or);
		$chuoi=$chuoi."(SELECT *FROM  san_pham WHERE $chuoi_or thuoc_menu='$id' ORDER BY id desc LIMIT 0,$num) union ";
		$tsd_sql= $tsd_sql +$num;		
	}
	$chuoi = substr($chuoi,0,-6);
	$st=ceil($tsd_sql/$so_gioi_han);
	$chuoi = $chuoi."limit $vtbd,$so_gioi_han";
	$query = mysql_query($chuoi);*/
?>


<style type="text/css">
	a.sua_xoa:link { font-size: 16px; text-decoration: none;  color: #FF00FF; font-weight: bold}
	a.sua_xoa:visited { font-size: 16px; color: #FF00FF; text-decoration: none; font-weight: bold}
	a.sua_xoa:hover { font-size: 16px; text-decoration: underline; color: #FF8C00; font-weight: bold; font-style: normal; }

	a.thua__link_1:link { font-size: 14px; text-decoration: none;  color: #0b55c4; }
	a.thua__link_1:visited { font-size: 14px; color: #0b55c4; text-decoration: none; }
	a.thua__link_1:hover { font-size: 14px; text-decoration: none; color: #084095;  font-style: normal; }

</style>
<script type="text/javascript">
	function chuyen_avc(value)
	{
		//alert("chao");
		var link="?thamso=quan_ly_san_pham&id="+value;
		window.location=link;
	}
</script>
<?php
	if($_GET['tu_khoa']!="")
	{
		$phamang=explode(" ",trim($_GET['tu_khoa']));
		$phamang=xoa_phan_tu_mang_rong($phamang);
		$ntc="";
		for($fff=0;$fff<count($phamang)-1;$fff++)
		{
			$ntc=$ntc."ten like '%$phamang[$fff]%' or ";
		}
		$sooo=count($phamang)-1;
		$ntc=$ntc."ten like '%$phamang[$sooo]%'";
		$chuoi_or=$ntc;
		$chuoi_or=" ( $chuoi_or ) and ";
	}
	else
	{
		$chuoi_or="";
	}
	function xuat_link($st)
	{
		//if($_GET['trang']==""){$_GET['trang']=1;}
		?>
			<style>
				a.pt3
				{
					color:black;
					text-decoration: none;
					font-weight:bold;
				}
				a.pt3:hover
				{
					color:red;
					text-decoration: none;
					font-weight:bold;
				}
			</style>
		<?php
		echo "<center>";
		if($_GET['trang']!="")
		{
			if(ereg("&trang=",$_SERVER['REQUEST_URI']))
			{
				$_SERVER['REQUEST_URI']=str_replace("&trang=","",$_SERVER['REQUEST_URI']);
				$_SERVER['REQUEST_URI']=substr($_SERVER['REQUEST_URI'],0,-strlen($_GET['trang']));
				$lpt=$_SERVER['REQUEST_URI']."&trang=";
			}
			else
			{
				$lpt=$_SERVER['REQUEST_URI']."&trang=";
			}
		}
		else
		{
			$_SERVER['REQUEST_URI']=str_replace("&trang=","",$_SERVER['REQUEST_URI']);
			$lpt=$_SERVER['REQUEST_URI']."&trang=";
		}
		if($_GET['trang']!="" and $_GET['trang']!="1")
		{
			if($_GET['trang']=="" or $_GET['trang']==1)
			{
				$k=1;
			}
			else
			{
				$k=$_GET['trang']-1;
			}
			$link_t=$lpt.$k;
			$link_d=$lpt."1";
			echo '<a href="'.$link_d.'" style="margin-right:10px" class="pt3">Đầu</a>';
			echo '<a href="'.$link_t.'" style="margin-right:10px" class="pt3">Trước</a>';
		}
		if($_GET['trang']==""){$a=1;}else{$a=$_GET['trang'];}
		$b_1=$_GET['trang']-5;$n_1=$b_1;
		if($b_1<1){$b_1=1;}
		$b_2=$_GET['trang']+5;
		if($b_2>=$st){$n_2=$b_2;$b_2=$st;}
		//echo $b_1."<hr>";
		if($n_1<0){$v=(-1)*$n_1;$b_2=$b_2+$v;}
		if($n_2>=$st){$v_2=$n_2-$st;$b_1=$b_1-$v_2;}
		if($b_1>1){echo ' ... ';}
		for($i=$b_1;$i<=$b_2;$i++)
		{
			$lpt_1=$lpt.$i;
			if($i>0 && $i<=$st)
			{
				if($i!=$a)
				{
					?>
						<a href="<?php echo $lpt_1; ?>" class="pt3"><?php echo $i;?> </a>
					<?php
				}
				else
				{
					echo "<b style=\"color:red\">$i</b>";
				}
			}
		}
		if($b_2<$st){echo ' ... ';}
		if($_GET['trang']!=$st && $st!=1)
		{
			if($_GET['trang']==$st)
			{
				$k=$st;
			}
			else
			{
				$k=$_GET['trang']+1;
				if($_GET['trang']==""){$k=2;}
			}
			$link_s=$lpt.$k;
			$link_cuoi=$lpt.$st;
			echo '<a href="'.$link_s.'" style="margin-left:10px" class="pt3">Sau</a>';
			echo '<a href="'.$link_cuoi.'" style="margin-left:10px" class="pt3">Cuối</a>';
		}
		echo "</center>";
	}
	function kiem_tra_menu_con($id)
	{
		$tv="select count(*) from menu where thuoc_menu='$id'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_row($tv_1);
		if($tv_2[0]!=0)
		{
			return "co";
		}
		else
		{
			return "khong";
		}
	}
	function hop_option_de_quy($id,$so)
	{
		$so++;
		$kt="";
		for($i=1;$i<=$so;$i++)
		{
			$kt=$kt."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		$tv="select * from menu where vitri_menu='doc' and thuoc_menu='$id' order by id";
		$tv_1=mysql_query($tv);
		while($tv_2=mysql_fetch_array($tv_1))
		{
			if($_GET['id']==$tv_2['id'])
			{
				$sl="selected";
			}
			else
			{
				$sl="";
			}
			echo "<option value=\"$tv_2[id]\" $sl>";
				echo $kt;
				echo $tv_2['ten'];
			echo "</option>";
			$ktmnc=kiem_tra_menu_con($tv_2['id']);
			if($ktmnc=="co")
			{
				hop_option_de_quy($tv_2['id'],$so);
			}
		}
	}
	function hop_option()
	{
		$tv="select * from menu where vitri_menu='doc' and thuoc_menu='' order by id";
		$tv_1=mysql_query($tv);
		echo "<select name=\"cap_do\" onchange=\"chuyen_avc(this.value)\">";
		echo "<option value=\"\">Tất cả</option>";
		while($tv_2=mysql_fetch_array($tv_1))
		{
			if($_GET['id']==$tv_2['id'])
			{
				$sl="selected";
			}
			else
			{
				$sl="";
			}
			echo "<option value=\"$tv_2[id]\" $sl>";
				echo $tv_2['ten'];
			echo "</option>";
			$ktmnc=kiem_tra_menu_con($tv_2['id']);
			if($ktmnc=="co")
			{
				hop_option_de_quy($tv_2['id'],0);
			}
		}
		echo "</select>";
	}
	function chuoi_id_menu_con($id_cha,$chuoi)
	{
		$tv="select * from menu where thuoc_menu='$id_cha' order by id";
		$tv_1=mysql_query($tv);
		while($tv_2=mysql_fetch_array($tv_1))
		{
			$chuoi=$chuoi.$tv_2['id'].",";
			$r="select count(*) from menu where thuoc_menu='$id_cha'";
			$r_1=mysql_query($r);
			$r_2=mysql_fetch_row($r_1);
			if($r_2[0]!=0)
			{
				$chuoi=chuoi_id_menu_con($tv_2['id'],$chuoi);
			}
		}
		return $chuoi;
	}
	function mang_id_menu_con($id_menu)
	{
		if($id_menu!="")
		{
			$chuoi=$id_menu.",";
		}
		else
		{
			$chuoi="";
		}
		$chuoi_id_menu_con=chuoi_id_menu_con($id_menu,$chuoi);
		$mang=explode(",",$chuoi_id_menu_con);
		unset($mang[count($mang)-1]);
		return $mang;
	}
	function dem_bcd($id,$chuoi_or)
	{
		$tv="select count(*) from san_pham where $chuoi_or thuoc_menu='$id'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_row($tv_1);
		return $tv_2[0];
	}
?>
<?php
	$sd=10;
	$so_gioi_han=$sd;
	if($_GET['trang']=="")
	{
		$vtbd=0;
	}
	else
	{
		$vtbd=($_GET['trang']-1)*$sd;
	}
	$id=$_GET['id'];
	$mang_id_menu_con=mang_id_menu_con($id);
	$tsd_sql=0;
	$chuoi="";
	//print_r($mang_id_menu_con);echo "<hr>";
	for($i=0;$i<count($mang_id_menu_con);$i++)
	{
		$id=$mang_id_menu_con[$i];
		$so=dem_bcd($id,$chuoi_or);
		$chuoi=$chuoi." ( select * from san_pham where $chuoi_or thuoc_menu='$id' order by id desc limit 0,$so ) union ";
		$tsd_sql=$tsd_sql + $so;
	}
	$chuoi=substr($chuoi,0,-6);
	$st=ceil($tsd_sql/$so_gioi_han);
	$chuoi=$chuoi." limit $vtbd,$so_gioi_han";
	#echo $chuoi."<hr>";
	$tv_1= mysql_query($chuoi);
?>

<form action="" method="get">
			<input type="hidden" name="thamso" value="tim_kiem">

	
			
				<?php
					if($_GET['tu_khoa']!="")
					{
						$tu_khoa=$_GET['tu_khoa'];
					}
					else
					{
						$tu_khoa="Từ khóa tìm kiếm";
					}
				?>
				<input name="tu_khoa" style="width:200px" value="<?php echo $tu_khoa; ?>" value="<?php echo $tu_khoa; ?>" name="tu_khoa" onfocus="if (this.value=='<?php echo $tu_khoa; ?>'){this.value=''};this.style.backgroundColor='#fffde8';" onblur="this.style.backgroundColor='#ffffff';">				
					<input type="image" src="image/Giaodien/3.png" style="border:0px solid red">
				
</form>			


	


