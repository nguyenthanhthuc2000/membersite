<?php


class Home extends Controller{


    function index(){
//        $teo = $this->model("SinhVienModel");
     
        $this->view('index', [
            "Page" => "pages/index",
        ]);

    }

    function method(){
        $this->view('index', [
            "Page" => "pages/method",
        ]);
    }

// http://localhost/live/Home/Show/1/2

    function Show($a, $b){        
        $teo = $this->model("SinhVienModel");
        $tong = $teo->Tong($a, $b); // 3
        $this->view("aodep", [
            "Page"=>"news",
            "Number"=>$tong,
            "Mau"=>"red",
            "SoThich"=>["A", "B", "C"],
            "SV" => $teo->SinhVien()
        ]);
    }
}
?>