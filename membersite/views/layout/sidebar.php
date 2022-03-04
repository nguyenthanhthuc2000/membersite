<div class="sidebar ">
    <div class="sidebar-toggle text-end ">
        <button class="btn btn-sidebar-toggle"><i class="fa-solid fa-bars"></i></button>
    </div>
    <div class="box-sidebar-container">
    </div>
    <hr class="hr-light m-0 mb-3 hr-menu">
    <aside class="" id="aside">
        <ul class="sidebar-list style-scrollbar mt-1">
            <?php
                foreach($this->category as $cat) {
            ?>
                <li class=" sidebar-item">
                    <a href="" class="txt_sitebar_color"><?php echo $cat['name'] ?></a>
                </li>

            <?php } ?>
        </ul>
    </aside>
</div>