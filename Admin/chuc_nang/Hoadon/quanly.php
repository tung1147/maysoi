<?php
	/*if($_GET['tu_khoa']!="")
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
	}*/
?>

<?php
	/*$sd = 20;
	$sql ="SELECT COUNT (*) FROM  hoa_don";
	$query = mysql_query($sql);
	$row = mysql_fetch_row($query);
	$st=ceil($row[0]/$sd);
	if($_GET['page']=="")
	{
		$vtbd = 0;
	}
	else
	{
		$vtbd = ($_GET['page']-1)*$sd;
	}
	$sql_1 = "SELECT * FROM hoa_don order by id desc limit $vtbd,$sd";
	$query_1 = mysql_query($sql_1);*/
	$sql = "SELECT * FROM hoa_don";
	$query = mysql_query($sql);
?>
<CENTER>
	
		<table id="table_quanly" border="1">
			<tr>
				<td width="200px"><font size="3px" color="#ff0000">T&#234;n ng&#432;&#7901;i mua h&#224;ng</b></font></td>
				<td width="100px"><font size="3px" color="#ff0000">T&#234;n &#273;&#259;ng nh&#7853;p</b></font></td>
				<td width="200px"><font size="3px" color="#ff0000">Mail</b></font></td>
				<td width="100px"><font size="3px" color="#ff0000">Phone</b></font></td>
				<td width="200px"><font size="3px" color="#ff0000">N&#7897;i dung</b></font></td>				
				<td width="50px"><font size="3px" color="#ff0000">Xem</b></font></td>
				
			</tr>
			<?php
				while($array=mysql_fetch_array($query))
				{
					#echo $array_1['id'];
					$link_xem="?thamso=xem_hoa_don&id=$array[id]";
					#$link_xoa="?thamso=xoa_hoa_don&id=$array_1[id]";	
					#echo $link_xem;
			?>
			<tr>
				<td><?php echo $array['ho_ten']; ?></td>
				<td><?php echo $array['ten_dang_nhap']; ?></td>
				<td><?php echo $array['email']; ?></td>
				<td><?php echo $array['dien_thoai']; ?></td>
				<td><?php echo $array['noi_dung']; ?></td>
				<td><a href="<?php echo $link_xem; ?>">Xem</a></td>
				
			</tr>
		
			<?php
			}			
			?>
			<tr>
				<td colspan="7">
					<?php
						#phan_trang($st);
					 ?>
				</td>
			</tr>
		</table>
	
</CENTER>
