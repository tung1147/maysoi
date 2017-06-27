<?php
$sql = "select * from footer";
$query = mysql_query($sql);
$fetch = mysql_fetch_array($query);
?>
<div class="khung_footer">
    <div class="footer-wrap">
        <?php echo $fetch['noi_dung']; ?>
    </div>
</div>