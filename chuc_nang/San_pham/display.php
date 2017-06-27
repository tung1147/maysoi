<?php
$sql = "SELECT * FROM san_pham WHERE trang_chu='Co' ORDER BY id DESC LIMIT 0,15";
$query = mysql_query($sql);
#$fetch=mysql_fetch_array($query)
?>
<?php

function display($td, $link_image, $gia, $link_chitiet, $id_sp) {
    ?>
    <div class="col-lg-4 col-md-4 col-sm-6 product-item">
        <div class="product-content">  
            <a class="product-image-wrapper" href="<?php echo $link_chitiet; ?>">
                <div class="product-image" >
                    <img src="<?php echo $link_image; ?>"/>
                </div>
            </a>
            <div class="product-name">
                <a href="<?php echo $link_chitiet; ?>" class="td"><?php echo $td; ?></a>
            </div>
            <div class="product-bottom">
                <a class="product-contact" href="?thamso=tu_van" class="td">Liên hệ</a>
                <a class="product-detail-link" href="<?php echo $link_chitiet; ?>" class="td">Chi tiết</a>
            </div>

                    <!--<span class="gia_ban"><?php echo $gia; ?>USD</span>-->
            <!--            <form action="">
                            <input type="hidden" name="thamso" value="xem_gio_hang">	
                            <input type="hidden" name="id_sp" value="<?php echo $id_sp; ?>">										
                            <input type="hidden" size="5" value="1" name="so_luong"> <br>
                            <input type="image" src="image/Giaodien/cart_big.gif" style="margin:3px 0px 3px 0px;border:0px solid red">
                        </form>-->
        </div>

    </div>
    <?php
}
?>
<section class="main-content s-left col-lg-9 col-md-9 col-sm-9">
    <div class="display_td">
        <?php echo $lang['sanpham']; ?>
    </div>
    <div class="row product-panel">
        <?php
        $img = "image/San_pham/";
        $a = 1;

        while ($fetch = mysql_fetch_array($query)) {
            $link_image = $img . "$fetch[hinh_anh]";
            $id_sp = $fetch['id'];
            $gia = $fetch['gia'];
            $link_chitiet = "?thamso=chitiet_sanpham&id=$fetch[id]";
            display($fetch['ten'], $link_image, $gia, $link_chitiet, $id_sp);
        }
        ?>

    </div>
</section>        