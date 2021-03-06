<?php

class SettingModel {

    public function getSetting()
    {
        return [
            'logo' => 'https://p.kindpng.com/picc/s/150-1506605_transparent-puma-logo-png-puma-fc-logo-png.png',
            'search' => 1,
        ];
    }

    public function getBanner() {
        $obj = [
            [
                'image' => 'https://coinreviews.io/wp-content/uploads/2017/10/tierion-logo-700x300.jpg',
                'link' => 'https://coinreviews.io/wp-content/uploads/2017/10/tierion-logo-700x300.jpg',
            ],
            [
                'image' => 'https://coinreviews.io/wp-content/uploads/2017/10/tierion-logo-700x300.jpg',
                'link' => 'https://coinreviews.io/wp-content/uploads/2017/10/tierion-logo-700x300.jpg',
            ]
        ];
        $object = json_decode(json_encode($obj));

        return $object ;
    }

    public function getStyle()
    {
        return [
            'header_h' => 60,
            'header_w' => 0,

            'bg_color' => '#191F29',
            'bg_footer' => '#191F29',
            'txt_color' => '#fff',

            'txt_menu_color' => '#9c9c9c',
            'txt_menu_active_color' => '#08AEF4',
            'bg_menu_color' => '#191F29',

            'txt_sitebar_color' => '#fff',
            'txt_sitebar_active_color' => '#fff',
            'bg_sitebar_active_color' => '#3D4047',
            'bg_sitebar_color' => '#191F29',
        ];
    }
}
