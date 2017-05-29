<?php

$sd=20;
#echo "XC";
	function xuat_link($st)
	{	
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







/*
	echo "1";
	$display = 20;
	#xac dinh hien thi bao nhieu dong.
	echo "1";
	function phan_trang ($pages){
		echo "<center>";
		if($_GET(['page']) != ""){
			if(ereg("&page=",$_SERVER['REQUEST_URI'])){
				$_SERVER['REQUEST_URI']= str_replace("&page=","",$_SERVER['REQUEST_URI']);
				$_SERVER['REQUEST_URI'] =substr($_SERVER['REQUEST_URI'],0,- strlen($_GET['page']));
				$lpt = $_SERVER['REQUEST_URI']."&page=";
			}else{
				$lpt = $_SERVER['REQUEST_URI']."&page=";
			}
		}else{
			$_SERVER['REQUEST_URI'] = str_replace("&page=","",$_SERVER['REQUEST_URI']);
			$lpt = $_SERVER['REQUEST_URI']."&page=";
		}
		if($_GET('page') != "" and $_GET['page'] !="1"){
			if($_GET['page']=="" or $_GET['page'] ==1){
				$k =1;
			}else{
				$k= $_GET['page']-1;
			}
			$next = $lpt.$k;
			#$next = $lpt."1";
			#echo '<a href =" '.$back.' " style = "margin-right:10px" class = "back"> Back</a>';
			echo '<a href =" '.$next.' " style = "margin-right:10px" class = "next"> Next</a>';
		}
		echo "dc roi";
		if($_GET['page']==""){
			$a=1;
		}else{
			$a= $_GET['page'];
		}
		$b = $_GET['page']-5;
		$n = $b;
		if($b<1){
			$b=1;
		}
		$c = $_GET['page']+5;
		if($c>=$pages){
			$m=$c;
			$c=$pages;
		}
		if($n<0){
			$v=(-1)*$n;
			$c=$c+$v;
		}
		if($m>=$$pages){
			$v_1=$m-$pages;
			$b=$b-$v_1;
		}
		if($b>1){
			echo '...';
		}
		for ($i=$b;$i<=$c;$i++){
			$lpt_1=$lpt.$i;
			if($i>0 && $i<=$pages){
				if($i !=$a){
					?>
						<a href="<?php echo $lpt_1; ?>" class="pt3"><?php echo $i;?></a>
					<?php
				}else{
					echo "<b style=\"color:red\">$i</b>";
				}
			}
		}
		if($c<$pages){
			echo '...';
		}
		if($_GET['page'] !=$pages && $pages !=1){
			if($_GET['page'] == $pages){
				$k =$pages;
			}else{
				$k = $_GET['page']+1;
				if($_GET['page']==""){
					$k=2;
				}
			}
			$back = $lpt.$k;
			echo '<a href=" '.$back. ' " style="margin-left:10px" class="back"> Sau</a>';
		}
		echo "</center>";	
	}
	echo "2";*/
	function cap_menu($id_menu,$a){
		$query ="SELECT *FROM menu WHERE id='$id_menu' ";
		$rel= mysql_query($query);
		$arry = mysql_fetch_array($rel);
		if($arry['thuoc_menu']==""){
			return $a;
		}else{
			$sql = "SELECT *FROM menu WHERE id='$arry[thuoc_menu]'";
			$sql_1=mysql_query($sql);
			$sql_2 = mysql_fetch_array($sql_1);
			$a++;
			return cap_menu($sql_2['id'],$a);
		}
		
	}

	function kiem_tra_menu_con($id){
	$a = "SELECT COUNT(*) FROM menu WHERE thuoc_menu='$id'"; #tra ve so luong cac dong trong bang co gia tri $id
	$query = mysql_query($a);
	$row = mysql_fetch_row($query);
	if($row[0] !=0){
		return "Yes";
	}else{
		return "No";
	}
}

	function menu_de_quy($id,$chuoi_menu){
		$sql ="SELECT *FROM menu WHERE vitri_menu='doc' and thuoc_menu='$id' ORDER BY id";
		$relt =mysql_query($sql);
		
		while($arry = mysql_fetch_array($relt)){
			$chuoi_menu = $chuoi_menu."(SELECT * FROM menu WHERE id='$arry[id]') union";
			$ktmnc= kiem_tra_menu_con($arry['id']);
			if($ktmnc =="Yes"){
				$chuoi_menu = menu_de_quy($arry['id'],$chuoi_menu);
			}
		}
		return $chuoi_menu;
	}
	$chuoi_menu ="";
	$sql = "SELECT * FROM menu WHERE vitri_menu='doc' and thuoc_menu='' ORDER BY id";
	$relt = mysql_query($sql);
	
	while($arrys = mysql_fetch_array($relt)){
		$chuoi_menu = $chuoi_menu."(SELECT * FROM menu WHERE id='$arry[id]') union";
		$ktmnc= kiem_tra_menu_con($arry['id']);
		if($ktmnc =="Yes"){
			$chuoi_menu = menu_de_quy($arry['id'],$chuoi_menu);
		}
	}
	$chuoi_menu = substr($chuoi_menu,0,-6);
	if($_GET['trang']==""){
		$vtbd =0;
	}else{
		$vtbd=($_GET['trang']-1)*$sd;
	}
	$chuoi_menu = $chuoi_menu. "limit $vtbd,$sd";
	$query = mysql_query($chuoi_menu);
	#tinh so trang
	$sql_1 = "SELECT COUNT(*) FROM menu WHERE vitri_menu='doc'";
	$relt_1 = mysql_query($sql_1);
	$row = mysql_fetch_row($relt_1);
	$st =ceil($row[0]/$sd);

	
?>


<center>
	<table  id="table_quanly" border="1">
		<tr>
			<td width="300px" align="center"><font size="3px" color="#ff0000"><b>T&#234;n menu</b></font></td>
			<td width="150px" align="center"><font size="3px" color="#ff0000"><b>S&#7917;a</b></font> </td>
			<td width="150px" align="center"><font size="3px" color="#ff0000"><b>Xo&#225;</b></font></td>
		</tr>
		<?php 
			while ($abc =mysql_fetch_array($query)){
				$link_sua = "?thamso=sua_menu_doc&id=$abc[id]&trang=$_GET[trang]";
				$link_xoa ="?thamso=xoa_menu_doc&id=$abc[id]";
				$cap_menu = cap_menu($abc['id']);
				$chuoi_kt="";
				for($j=1;$j<$cap_menu;$j++){
					$chuoi_kt = $chuoi_kt."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				}
			?>
			
		
		<tr>
			<td><?php echo $abc['ten'] ;?></a></td>
			<td><a href="<?php echo $link_sua ; ?>">S&#7917;a</a></td>
			<td><a href="<?php echo $link_xoa ; ?>">Xo&#225;</a></td>
		</tr>
		<?php
		}
		?>
		<tr>
			<td colspan="3">
				<?php
					#phan_trang($pages);
					xuat_link($st);
				?>
			</td>			
	</tr>
</table>
</center>

