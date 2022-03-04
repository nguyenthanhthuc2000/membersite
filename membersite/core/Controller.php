<?php
class Controller{
    public $note = 1;
    public $setting;
    public $style;
    public $category;
    public $menu;

    function __construct ()
    {
        $this->initSetting();
    }
    public function model($model){
        require_once "./membersite/models/".$model.".php";
        return new $model;
    }


    public function view($view, $data=[]){

        $link = explode('.', $view);

        $this->node = sizeof($link);
        if (sizeof($link)==1) {
            require_once "./membersite/views/".$view.".php";
        }
        else{
         $url =  "./membersite/views";
         for ($i=0; $i < sizeof($link) - 1 ; $i++) { 
             # code...
             $url =  $url.'/'.$link[$i];
         }
         $url =  $url.'/'.$link[sizeof($link)-1].".php";
        //  echo $url;
         require_once $url;
        }
    }

    public function layout($layout, $data=[]){

        $link = explode('.', $layout);
        $this->node = sizeof($link);
        if (sizeof($link)==1) {
            require_once "./membersite/views/layout/".$layout.".php";
        }
        else{
            $url =  "./membersite/views/";
            for ($i=0; $i < sizeof($link) - 1 ; $i++) {
                # code...
                $url =  $url.'/'.$link[$i];
            }
            $url =  $url.'/'.$link[sizeof($link)-1].".php";
            //  echo $url;
            require_once $url;
        }

    }

    public function getCss($url){

        $link = explode('.', $url);
        if (sizeof($link)==1) {
            echo "public/Css/".$url.'.css';
            // require_once "./membersite/views/".$view.".php";
            }
        else{
             $url =  "public/Css/";
             for ($i=0; $i < sizeof($link) - 1 ; $i++) {
                 # code...
                 $url =  $url.'/'.$link[$i];
             }
             $url =  $url.'/'.$link[sizeof($link)-1].".css";
            //  echo $url;
            echo $url;
        }

    }

    public function getJs($url){

        $link = explode('.', $url);
        if (sizeof($link)==1) {
            echo "public/Js/".$url.'.css';
            // require_once "./membersite/views/".$view.".php";
        }
        else{
            $url =  "public/Js/";
            for ($i=0; $i < sizeof($link) - 1 ; $i++) {
                # code...
                $url =  $url.'/'.$link[$i];
            }
            $url =  $url.'/'.$link[sizeof($link)-1].".css";
            //  echo $url;
            echo $url;
        }

    }

    function initSetting()
    {
        $this->setting = $this->model('SettingModel')->getSetting();
        $this->style = $this->model('SettingModel')->getStyle();
        $this->category = $this->model('CategoryModel')->getCategory();
        $this->menu = $this->model('CategoryModel')->getMenu();
    }

}
