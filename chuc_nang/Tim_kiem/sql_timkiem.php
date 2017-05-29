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
	
	
	function vtbd($sd)
	{
		if($_GET['page']=="" or $_GET['page']==1){$vtbd=0;}else{$vtbd=($_GET['page']-1)*$sd;}
		return $vtbd;
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
	
?>