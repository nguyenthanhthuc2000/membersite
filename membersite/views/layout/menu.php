
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <?php
            $i = 0;
            foreach($this->banner as $b) {
                ?>
                <div class="carousel-item <?php if($i == 0) echo 'active' ?>">
                    <img src="<?php echo $b->image ?>" class="d-block w-100" style="height: 100px; display: block; object-fit: contain;" alt="...">
                </div>

                <?php $i++; } ?>
        </div>
    </div>

<div class="top_m-menu mb-3 bg_menu_color">
    <?php
        $i = 0;
        foreach($this->menu as $m) {
    ?>
        <a class="btn txt_menu_color top_m-menu-btn <?php if($i == 0) echo 'active' ?>"><?php echo $m['name'] ?></a>

    <?php $i++; } ?>
</div>