<?php

function menu_ngang() {
    $sql = "SELECT COUNT(*) FROM menu WHERE vitri_menu='ngang'";
    $query = mysql_query($sql);
    $fetch = mysql_fetch_row($query);
    return $fetch[0];
}

$menu_ngang = menu_ngang();
#echo $menu_ngang ;
$sql = "SELECT *FROM menu WHERE vitri_menu='ngang' ORDER BY id";
$query = mysql_query($sql);
?>
<nav class="navbar navbar-default mine-nav">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <?php
            $fetch = mysql_fetch_array($query);
            echo "<a class=\"navbar-brand\" href=\"$fetch[lien_ket]\">$fetch[ten]</a>";
            ?>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                while ($fetch = mysql_fetch_array($query)) {
                    echo "<li class=\"navigation-item\"><a href=\"$fetch[lien_ket]\" >$fetch[ten]</a></li>";
                }
                ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>