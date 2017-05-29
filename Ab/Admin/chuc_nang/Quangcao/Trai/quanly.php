<?php
	function phan_trang($st)
	{	
		echo "<center>";
		if($_GET['page']!="")
		{
			if(ereg("&page=",$_SERVER['REQUEST_URI']))
			{
				$_SERVER['REQUEST_URI']=str_replace("&page=","",$_SERVER['REQUEST_URI']);
				$_SERVER['REQUEST_URI']=substr($_SERVER['REQUEST_URI'],0,-strlen($_GET['page']));
				$lpt=$_SERVER['REQUEST_URI']."&page=";
			}
			else
			{
				$lpt=$_SERVER['REQUEST_URI']."&page=";
			}
		}
		else
		{
			$_SERVER['REQUEST_URI']=str_replace("&page=","",$_SERVER['REQUEST_URI']);
			$lpt=$_SERVER['REQUEST_URI']."&page=";
		}
		if($_GET['page']!="" and $_GET['page']!="1")
		{
			if($_GET['page']=="" or $_GET['page']==1)
			{
				$k=1;
			}
			else
			{
				$k=$_GET['page']-1;
			}
			$link_t=$lpt.$k;
			$link_d=$lpt."1";
			echo '<a href="'.$link_d.'" style="margin-right:10px" class="pt3">&#272;&#7847;u </a>';
			echo '<a href="'.$link_t.'" style="margin-right:10px" class="pt3">Tr&#432;&#7899;c</a>';
		}
		if($_GET['page']==""){$a=1;}else{$a=$_GET['page'];}
		$b_1=$_GET['page']-5;$n_1=$b_1;
		if($b_1<1){$b_1=1;}
		$b_2=$_GET['page']+5;
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
		if($_GET['page']!=$st && $st!=1)
		{
			if($_GET['page']==$st)
			{
				$k=$st;
			}
			else
			{
				$k=$_GET['page']+1;
				if($_GET['page']==""){$k=2;}
			}
			$link_s=$lpt.$k;
			$link_cuoi=$lpt.$st;
			echo '<a href="'.$link_s.'" style="margin-left:10px" class="pt3">Sau</a>';
			echo '<a href="'.$link_cuoi.'" style="margin-left:10px" class="pt3">Cu&#7889;i</a>';
		}
		echo "</center>";
	}
	
	
	function check_menu_con($id)
	{
		$sql="select count (*) from menu where thuoc_menu='$id'";
		$query=mysql_query($sql);
		$fetch=mysql_fetch_row($query);
		if($fetch[0]!=0)
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
		$sql="select * from menu where vitri_menu='doc' and thuoc_menu='$id' order by id";
		$query=mysql_query($sql);
		while($fetch=mysql_fetch_array($query))
		{
			if($_GET['id']==$fetch['id'])
			{
				$sl="selected";
			}
			else
			{
				$sl="";
			}
			echo "<option value=\"$fetch[id]\" $sl>";
				echo $kt;
				echo $fetch['ten'];
			echo "</option>";
			$ktmnc=check_menu_con($fetch['id']);
			if($ktmnc=="co")
			{
				hop_option_de_quy($fetch['id'],$so);
			}
		}
	}
	function hop_option()
	{
		$sql="select * from menu where vitri_menu='doc' and thuoc_menu='' order by id";
		$query=mysql_query($sql);
		echo "<select name=\"cap_do\" onchange=\"chuyen_avc(this.value)\">";
		echo "<option value=\"\">T?t c?</option>";
		while($fetch=mysql_fetch_array($query))
		{
			if($_GET['id']==$fetch['id'])
			{
				$sl="selected";
			}
			else
			{
				$sl="";
			}
			echo "<option value=\"$fetch[id]\" $sl>";
				echo $fetch['ten'];
			echo "</option>";
			$ktmnc=check_menu_con($fetch['id']);
			if($ktmnc=="co")
			{
				hop_option_de_quy($fetch['id'],0);
			}
		}
		echo "</select>";
	}
	function chuoi_id_menu_con($id_cha,$chuoi)
	{
		$sql="select * from menu where thuoc_menu='$id_cha' order by id";
		$query=mysql_query($sql);
		while($fetch=mysql_fetch_array($query))
		{
			$chuoi=$chuoi.$fetch['id'].",";
			$r="select count(*) from menu where thuoc_menu='$id_cha'";
			$r_1=mysql_query($r);
			$r_2=mysql_fetch_row($r_1);
			if($r_2[0]!=0)
			{
				$chuoi=chuoi_id_menu_con($fetch['id'],$chuoi);
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
		$sql="select count(*) from san_pham where $chuoi_or thuoc_menu='$id'";
		$query=mysql_query($sql);
		$fetch=mysql_fetch_row($query);
		return $fetch[0];
	}
?>

<?php
	$sd = 10;
	$gioi_han = $sd;
	if($_GET['page'] =="")
	{
		$v =0;		
	}
	else
	{
		$v = ($_GET['$page']-1)*$sd;
	}
	$id =$_GET['id'];
	$mang_id_menu_con =mang_id_menu_con($id);
	$a =0;
	$chuoi = "";
	for($i=0;$i<count($mang_id_menu_con);$i++)
	{
		$id = $mang_id_menu_con[$id];
		$num = dem_bcd($id);
		$chuoi = $chuoi." (SELECT * FROM san_pham WHERE thuoc_menu = '$id' ORDER BY  id desc limit 0,$num ) union)";
		$a = $a + $num;
	}
	$chuoi = substr($chuoi,0,-6);
	$chuoi = "SELECT *FROM quang_cao WHERE vi_tri ='trai'";
	$chuoi = $chuoi."LIMIT $v,$gioi_han";
	$query = mysql_query($chuoi);	
	$row = mysql_fetch_row($query_1);
	$st = ceil($row[0]/$gioi_han);
	
?>

<CENTER>
<form action="" method="post">
<table id="table_quanly" border="1" width="700px" >
	<tr style="font: visited;color: #fd0222">
		<td width="100px" align="center"><font size="3px" color="#ff0000"><b>H&#236;nh &#7843;nh/Flash</b></font></td>
		<td width="200px" align="center"><font size="3px" color="#ff0000"><b>Li&#234;n k&#7871;t </b></font></td>
		<td width="100px" align="center"><font size="3px" color="#ff0000"><b>R&#7897;ng</b></font></td>
		<td width="100px" align="center"><font size="3px" color="#ff0000"><b>Cao</b></font></td>
		<td width="100px" align="center"><font size="3px" color="#ff0000"><b>S&#7917;a</b></font></td>
		<td width="100px" align="center"><font size="3px" color="#ff0000"><b>Xo&#225;</b></font></td>
	</tr>
	<?php
		while($fetch = mysql_fetch_array($query))
		{
			$link_image = "../image/Quangcao/$fetch[ten_file]";
			$noi_dung = cat_chuoi_789(thay_the_fckeditor($fetch['noi_dung']),0,150);
			$link_sua = "?thamso=sua_quang_cao_trai&id=$fetch[id]&page=$_GET[page]";
			$link_xoa = "?thamso=xoa_quang_cao_trai&id=$fetch[id]";
			$cat_chuoi = explode(".",$fetch['ten_file']);
			$duoi_anh = $cat_chuoi[count($cat_chuoi)-1];
			$rong = $fetch['rong'];
			$cao = $fetch['cao'];
		?>
		
	<tr>
		<td align="center">
			<?php 
				echo "<div style = \"width:$rong;height:$cao;overflow:hidden;margin: 6px 6px 6px 6px\">";
				if($duoi_anh !="swf")
				{
			?>
					<img  src="<?php echo $link_image;?>" style="width:<?php echo $rong; ?>; height: <?php echo $cao; ?>"/>	
			<?php
				}
				else 
				{
					flash($link_image,$rong,$cao);
				}
				echo "</div>";
			?>
		</td>
		<td><?php echo $fetch['link']; ?></td>
		<td><?php echo $rong; ?></td>
		<td><?php echo $cao; ?></td>
		<td align="center"><a href="<?php echo $link_sua; ?>"> S&#7917;a</a></td>
		<td align="center"><a href="<?php echo $link_xoa; ?>"> Xo&#225;</a></td>
	</tr>
	<?php
		}
	 ?>
	<tr>
		<td colspan="6"> 
			<?php phan_trang($st); ?>
		</td>
	</tr>
</table>
</form>
</CENTER>