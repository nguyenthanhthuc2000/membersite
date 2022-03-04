<style>
    header .top-header {
        color: #ffffff;
        height: <?php echo $data['style']['header_h']; ?>px;
    }

    .bg_color {
        background-color: <?php echo $data['style']['bg_color']; ?>;
    }

    .footer {
        background-color: <?php echo $data['style']['bg_footer']; ?>;
    }

    .txt_color {
        color: <?php echo $data['style']['txt_color']; ?>;
    }

    .bg_menu_color {
        background-color: <?php echo $data['style']['bg_menu_color']; ?>;
    }

    .top_m-menu .top_m-menu-btn {
        color: <?php echo $data['style']['txt_menu_color']; ?>;
    }
    .top_m-menu .top_m-menu-btn.active, .top_m-menu .top_m-menu-btn:hover {
        color: <?php echo $data['style']['txt_menu_active_color']; ?>;
    }
    .txt_sitebar_color {
        color: <?php echo $data['style']['txt_sitebar_color']; ?>;
    }
    .sidebar aside .sidebar-list .sidebar-item.active, .sidebar aside .sidebar-list .sidebar-item:hover {
        background-color: <?php echo $data['style']['bg_sitebar_active_color']; ?>;
    }

    .sidebar aside .sidebar-list .sidebar-item.active a,
    .sidebar aside .sidebar-list .sidebar-item a:hover {
        color: <?php echo $data['style']['txt_sitebar_active_color']; ?>;
    }
    #aside {
        background-color: <?php echo $data['style']['bg_sitebar_color']; ?>;
    }
</style> 