<?php
function xuat_link($st)
	{
		//if($_GET['trang']==""){$_GET['trang']=1;}
		
		
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
		if($_GET['trang']==""){
			$a=1;
			}else{
			$a=$_GET['trang'];
			}
			
		$b_1=$_GET['trang']-5;
		$n_1=$b_1;
		
		if($b_1<1){
		$b_1=1;
		}
		$b_2=$_GET['trang']+5;
		if($b_2>=$st){
		$n_2=$b_2;
		$b_2=$st;
		}
		//echo $b_1."<hr>";
		if($n_1<0){
		$v=(-1)*$n_1;
		$b_2=$b_2+$v;
		}
		if($n_2>=$st){
		$v_2=$n_2-$st;
		$b_1=$b_1-$v_2;
		}
		if($b_1>1)
		{
		echo ' ... ';
		}
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
	$sql = "SELECT * FROM thanh_vien";
	$query = mysql_query($sql);
	
?>
<CENTER>
	<form action="">
	
		<table border="1" id="table_quanly">
			<tr>
				<td width="200px"><font size="3px" color="#ff0000"><b>T&#234;n &#273;&#259;ng nh&#7853;p</b></font></td>
				<td width="100px"><font size="3px" color="#ff0000"><b>M&#7853;t kh&#7849;u</b></font></td>
				<td width="200px"><font size="3px" color="#ff0000"><b>Mail</b></font></td>
				<td width="50px"><font size="3px" color="#ff0000"><b>Phone</b></font></td>
				<td width="250px"><font size="3px" color="#ff0000"><b>&#272;&#7883;a ch&#7881;</b></font></td>
				<td width="50px"><font size="3px" color="#ff0000"><b>S&#7917;a</b></font></td>
				<td width="50px"><font size="3px" color="#ff0000"><b>Xo&#225;</b></font></td>
			</tr>
			<?php
				while($array_1 = mysql_fetch_array($query ))
				{
					$link_xoa = "?thamso=xoa_thanh_vien&id=$array_1[id]";
					$link_sua = "?thamso=sua_thanh_vien&id=$array_1[id]";
					#echo $link_sua;
			?>
			<tr>
				<td><?php echo $array_1['ten_dang_nhap'] ?></td>
				<td><?php echo $array_1['mat_khau'] ?></td>
				<td><?php echo $array_1['email'] ?></td>
				<td><?php echo $array_1['dien_thoai'] ?></td>
				<td><?php echo $array_1['dia_chi'] ?></td>
				<td><a href="<?php echo $link_sua; ?>">S&#7917;a</a></td>
				<td><a href="<?php echo $link_xoa; ?>">Xo&#225;</a></td>
			</tr>
			<?php
				}
			?>
			<tr>
				<td colspan="7"> <?php xuat_link ($st);?></td>
			</tr>
			
		</table>
</form>
</CENTER>