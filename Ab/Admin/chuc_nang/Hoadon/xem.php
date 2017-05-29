<?php
	$sql = "SELECT *FROM hoa_don WHERE id='$_GET[id]' ";
	$query = mysql_query($sql);
	$array = mysql_fetch_array($query);
	$hoa_don = explode("______",$array['don_hang']);
	
?>
<CENTER>
	<form action="">
		<table id="table_quanly" border="1">
			<tr>
				<td>Chi ti&#7871;t ho&#225; &#273;&#417;n</td>
			</tr>
		</table >
		<table id="table_quanly" border="1">
			<tr>
				<td>STT</td>
				<td>T&#234;n s&#7843;n ph&#7849;m</td>
				<td>Gi&#225; b&#225;(USD)</td>
				<td>S&#7889; l&#432;&#7907;ng</td>
				<td>T&#7893;ng c&#7897;ng(USD)</td>
			</tr>
			<?php
				$a =1;
				$tong_tien = 0;
				#echo 1;
				for($i=0;$i<count($hoa_don)-1;$i++)
				{
					#echo 2;
					$hoa_don_1 = explode("___",$hoa_don[$i]);
					$id =$hoa_don_1[0];
					$sl = $hoa_don_1[1];
					$sql_1 = "SELECT *FROM  san_pham WHERE id ='$id'";
					$query_1 = mysql_query($sql_1);
					$array_1 = mysql_fetch_array($query_1);
					$gia = number_format($array_1['gia'],0,".",".");
					$sum = $array_1['gia']*$sl;
					$sum_sum = number_format($num,0,".",".");
					$tong_tien = $tong_tien+$sum;
					$sql1 = "SELECT *FROM san_pham WHERE id='$id'";
					$query1 = mysql_query($sql1);
					$array1 = mysql_fetch_array($query1);
				
			?>
			<tr>
				<td align="center"><?php echo $a; ?></td>
				<td><?php echo $array1['ten']; ?></td>
				<td><?php echo $gia; ?></td>
				<td><?php echo $sl; ?></td>
				<td><?php echo $sum; ?></td>
			</tr>
			<?php
				$a++;
			}
			$sum_sum_1 = number_format($tong_tien,0,".",".");
			?>
			<tr>
				<td colspan="5" align="center"><a href="?thamso=quan_ly_hoa_don&id=<?php echo $_GET['id']; ?>">&#272;&#243;ng</a></td>
			</tr>
		</table>
	</form>
</CENTER>