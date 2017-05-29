<?php
	function xacdinh_menucon_doc ($id)
	{
		$sql = "SELECT COUNT(*) FROM  menu WHERE thuoc_menu='$id'";
		$query = mysql_query($sql);
		$ferch = mysql_fetch_row($query);
		if($ferch[0] !=0)
		{
			return "Yes";
		}
		else
		{
			return "No";
		}
		
	}
	
	 function dequy_menu_doc ($id)
	{
		$sql = "SELECT *FROM menu WHERE thuoc_menu ='$id' and vitri_menu='doc' ORDER BY id";
		$query = mysql_query($sql);
		while($fetch = mysql_fetch_array($query))
		{
			$id = $fetch['id'];
			$link_menu = "?thamso=xuat_san_pham&id=$id";
			echo "<li>";
				echo "<a href=\"$link_menu\">";
					echo $fetch['ten'];
				echo "</a>";
				$xacdinh_menucon_doc = xacdinh_menucon_doc($id);
				#echo $xacdinh_menucon_doc;
				if($xacdinh_menucon_doc == "Yes")
				{
					echo "<ul>";
						dequy_menu_doc($id);
					echo "</ul>";
				}
				else
				{					
				}
			echo "</li>";
		}
	}
?>
<div class= "khung_td">
	<span><?php echo $lang['Danhmuc']; ?></span>
</div>
<div class="menu_doc" id="menu_doc">
	<ul>
		<?php
			$sql = "SELECT *FROM menu WHERE thuoc_menu =' ' and vitri_menu='doc' ORDER BY id";
		$query = mysql_query($sql);
		while($fetch = mysql_fetch_array($query))
		{
			$id = $fetch['id'];
			$link_menu = "?thamso=xuat_san_pham&id=$id";
			echo "<li>";
				echo "<a href=\"$link_menu\">";
					echo $fetch['ten'];
				echo "</a>";
				$xacdinh_menucon_doc = xacdinh_menucon_doc($id);
				if($xacdinh_menucon_doc == "Yes")
				{
					echo "<ul>";
					#echo "AÂAA";
						dequy_menu_doc($id);
					echo "</ul>";
				}
				else{
					#echo "Ngu";
				}
			echo "</li>";
		}
	
?>
	</ul>
</div>
<script type = "text/javascript" >
	menu_doc();
</script>