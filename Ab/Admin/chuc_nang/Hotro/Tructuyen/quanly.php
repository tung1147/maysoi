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
?>

<?php
	$sd = 20;
	$sql = "SELECT COUNT(*) FROM hotro_tructuyen";
	$query = mysql_query($sql);
	$fetch = mysql_fetch_row($query);
	$st = ceil($fetch[0]/$sd);
	if($_GET['page'] =="")
	{
		$v =0;
	}
	else
	{
		$v=($_GET['page']-1)*$sd;
	}
	$sql_1 = "SELECT *FROM hotro_tructuyen ORDER BY id LIMIT $v,$sd";
	$query_1 = mysql_query($sql_1);
?>
<CENTER>
	<table width="500px" border="1" id="table_quanly">
		<tr>
			<td width="300px"><font size="3px" color="#ff0000"><b>T&#234;n Nick tr&#7921;c tuy&#7871;n</b></font></td>
			<td width="100px"><font size="3px" color="#ff0000"><b>S&#7917;a</b></font></td>
			<td width="100px"><font size="3px" color="#ff0000"><b>Xo&#225;</b></font></td>
		</tr>
		<?php 
			while($fetch_1 = mysql_fetch_array($query_1))
			{
				$link_sua = "?thamso=sua_truc_tuyen&id=$fetch_1[id]&page=$_GET[page]";
				$link_xoa = "?thamso=xoa_truc_tuyen&id=$fetch_1[id]&page=$_GET[page]";
		?>
		<tr>
			<td><?php echo $fetch_1['ten_nick']; ?></td>
			<td align="center"><a href="<?php echo $link_sua; ?>">S&#7917;a</a></td>
			<td align="center"><a href="<?php echo $link_xoa; ?>">Xo&#225;</a></td>
		</tr>
		<?php
			}
		?>
		<tr>
			<td colspan="3">
				<?php 
					phan_trang($st);
				?>
			</td>
		</tr>
	</table>
</CENTER>