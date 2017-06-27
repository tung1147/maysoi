<?php
ob_start(); #
setcookie("a", "a", time() + 3600); #
session_start();
ini_set('display_errors', 0);
include("ketnoi_host.php");
include("ketnoi.php");
include("chuc_nang/ham/ham.php");
include("chuc_nang/Login_Logout/check_login.php");
include("chuc_nang/Title/title.php");
include("common.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $title; ?></title>
        <meta name="keywords" content="<?php echo $title; ?>" />
        <meta name="description" content="<?php echo $title; ?>" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="CSS/style.css">
        <script type="text/javascript" src="CSS/js.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="CSS/menu_ngang/menu_ngang.css">
        <link rel="stylesheet" type="text/css" media="screen" href="CSS/menu_doc/menu_doc.css">
        <link rel="stylesheet" type="text/css" media="screen" href="CSS/bootstrap.css">
        <link rel="stylesheet" type="text/css" media="screen" href="CSS/main.css">
        <script type="text/javascript" src="CSS/menu_doc/menu_doc.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="CSS/menu_ngang_duoi/menu_ngang_duoi.css">
        <script type="text/javascript" src="CSS/jquery-3.2.1.min.js"></script>




    </head>
    <body>
        <?php
        include("chuc_nang/Quangcao_truot/quang_cao_truot.php");
        ?>
        <?php
        include("chuc_nang/xuly_getpost.php");
        ?>
        <center>
            <div class="container">

                <!--Banner-->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <?php
                        include("chuc_nang/Banner/banner.php");
                        ?>
                    </div>
                </div>	


                <!--Menu ngang-->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <?php
                        include("chuc_nang/Menu_ngang/menu_ngang.php");
                        ?>
                    </div>
                </div>

                <div class="row">
                    <?php
//                    include("chuc_nang/menu_doc/menu_doc.php");
//                    echo "<div class=\"cao_3_px\"></div>";
//                    include("chuc_nang/San_pham/san_pham_new.php");
//                    echo "<div class=\"cao_3_px\"></div>";
//                    #include("chuc_nang/Giavang_ngoaite/giavang_ngoaite.php");
//                    echo "<div class=\"cao_3_px\"></div>";
//                    include("chuc_nang/Quangcao_trai/quang_cao_trai.php");
                    ?>
                </div>

                <div class="row">
                    <?php
                    include("chuc_nang/Link_trang/link.php");
                    ?>
                </div>

                <div class="row">
                    <?php
//                    include("chuc_nang/Login_Logout/dang_nhap.php");
//                    echo "<div class=\"cao_3_px\"></div>";
//                    include("chuc_nang/Giohang/giohang.php");
//                    echo "<div class=\"cao_3_px\"></div>";
//                    include("chuc_nang/Tructuyen/tructuyen.php");
//                    echo "<div class=\"cao_3_px\"></div>";
//                    #include("chuc_nang/Thoitiet/thoitiet.php");
//                    echo "<div class=\"cao_3_px\"></div>";
//                    include("chuc_nang/Quangcao_phai/quang_cao_phai.php");
                    ?>
                </div>
            </div>
        </center>

        <!--Footer-->
        <?php
        include("chuc_nang/Footer/footer.php");
        ?>
        <script src="js/bootstrap.min.js"></script>
    </body>
    <!--<script type="text/javascript" src="CSS/quang_cao/quangcao.js"></script>-->
</html>
