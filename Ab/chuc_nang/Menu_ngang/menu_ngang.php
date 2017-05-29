<?php
	function menu_ngang()
	{
		$sql = "SELECT COUNT(*) FROM menu WHERE vitri_menu='ngang'";
		$query = mysql_query($sql);
		$fetch =mysql_fetch_row($query);
		return $fetch[0];
	}
	$menu_ngang = menu_ngang();
	#echo $menu_ngang ;
	$sql = "SELECT *FROM menu WHERE vitri_menu='ngang' ORDER BY id";
	$query=mysql_query($sql);
?>

	<div style="width: 1100px;background:#FFFFFF;height: 30px">
		<table style="margin: -1px 0px -1px 0px;background:#FFFFFF;" cellpadding=0; cellspacing=0; width="500px" height="30px">
		<tr>
			<td>
				<div class="menu_ngang" id="menu_ngang">
					<ul>
						<?php
							$a =1;
							while($fetch = mysql_fetch_array($query))
							{
								if($a == $menu_ngang)
								{
									echo "<li><a href=\"$fetch[lien_ket]\" style=\"border:0px solid #676767\">$fetch[ten]</a></li>";
								}
								else
								{
									echo "<li><a href=\"$fetch[lien_ket]\" >$fetch[ten]</a></li>";
								}
								$a++;
							}
						 ?>
					</ul>
				</div>
			</td>
		</tr>
			
		</table>		
	</div>
