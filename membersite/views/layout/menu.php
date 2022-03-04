<div class="top_m-menu mb-3 bg_menu_color">
    <?php
        $i = 0;
        foreach($this->menu as $m) {
    ?>
        <a class="btn txt_menu_color top_m-menu-btn <?php if($i == 0) echo 'active' ?>"><?php echo $m['name'] ?></a>

    <?php $i++; } ?>
</div>