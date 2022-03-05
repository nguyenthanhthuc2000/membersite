<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

<!--    <link rel="stylesheet" href=" --><?php //$this->getCss('style'); ?><!--">-->
    <link rel="stylesheet" href="http://localhost/membersite2/public/Css/style.css">
    <link rel="stylesheet" href="http://localhost/membersite2/public/Css/header.css">
    <?php $this->view('css.style',['style' => $this->style])  ?>

</head>

<body class="bg_color">

    <?php $this->layout('header'); ?>

    <main >

        <div class="bg_color d-flex container-fluid">

            <?php $this->layout('sidebar'); ?>

            <div class="main w-100">
                <div class="w-100 bg_color main-w-right style-scrollbar">

                    <?php $this->layout('menu'); ?>

                    <?php $this->view($data["Page"]); ?>

                </div>

                <div class="main-w-right">
                <?php $this->layout('footer'); ?>
                </div>

            </div>
        </div>

    </main>


    <div class="modal fade" id="loginModal" >
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row mt-3" style="justify-content: center;" id="">
                        <div class="col-10 text-center">
                            <form action="" class="frm-login">
                                <div class="logo mb-4">
                                    <img src="<?php echo $this->setting['logo'] ?>" id="logo" alt="">
                                </div>
                                <h4 class="mb-4">利用規約</h4>

                                <div class="row mx-auto">
                                    <div class="col-md-5 mb-3">
                                        <label class="title-input-frm">メールアドレス</label>
                                    </div>
                                    <div class="col-md-7 mb-3">
                                        <input type="email" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <label class="title-input-frm"">パスワード</label>
                                    </div>
                                    <div class="col-md-7 mb-3">
                                        <input type="email" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="box-btn__frm__login">
                                    <ul style="padding: 0;">
                                        <li>
                                            <button class="btn  btn-frm-login bg-btn-green">利用規約</button>
                                        </li>
                                        <li>
                                            <a href="" class="btn btn-frm-login bg-btn-grey">利用規約</a>
                                        </li>
                                        <li>
                                            <a href="" class="btn btn-frm-login bg-btn-greys">利用規約</a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="loginModal2" >
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row mt-3" style="justify-content: center;" id="">
                        <div class="col-10 text-center">
                            <form action="" class="frm-login">
                                <div class="logo mb-4">
                                    <img src="<?php echo $this->setting['logo'] ?>" id="logo" alt="">
                                </div>
                                <h4 class="mb-4">利用規約</h4>

                                <div class="row mx-auto">
                                    <div class="col-md-5 mb-3">
                                        <label class="title-input-frm">メールアドレス</label>
                                    </div>
                                    <div class="col-md-7 mb-3">
                                        <input type="email" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="box-btn__frm__login">
                                    <ul style="padding: 0;">
                                        <li>
                                            <button class="btn  btn-frm-login bg-btn-green">利用規約</button>
                                        </li>
                                        <li>
                                            <a href="" class="btn btn-frm-login bg-btn-grey">利用規約</a>
                                        </li>
                                        <li>
                                            <a href="" class="btn btn-frm-login bg-btn-greys">利用規約</a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="loginModal1" >
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mt-3" style="justify-content: center;" id="">
                        <div class="col-10 text-center">
                            <form action="" class="frm-login">
                                <div class="logo mb-4">
                                    <img src="<?php echo $this->setting['logo'] ?>" id="logo" alt="">
                                </div>
                                <h4 class="">パスワード再設定リンクをメールアドレスに送りました。</h4>
                                <div class="box-btn__frm__login">
                                    <ul style="padding: 0;">
                                        <li>
                                            <button class="btn  btn-frm-login bg-btn-green">利用規約</button>
                                        </li>
                                        <li>
                                            <a href="" class="btn btn-frm-login bg-btn-grey">利用規約</a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="./js/script.js"></script>
    <script src="./js/active.js"></script>
    <script>
        $('.top_m-menu-btn').click(function() {
            $('.top_m-menu-btn').removeClass('active');
            $(this).addClass('active');
        });

        $('.btn-sidebar-toggle').click(function() {
            $('.sidebar').toggleClass('active');
            $('.box-sidebar-container').toggleClass('active');
        })
        $('.box-sidebar-container').click(function(){
            $('.sidebar').toggleClass('active');
            $('.box-sidebar-container').toggleClass('active');
        })

        // $(window).resize(unActiveMenu());
        $( window ).resize(function() {
            unActiveMenu()
        });
        $(window).on('load', unActiveMenu());

        function unActiveMenu() {
            let windowWidth = $(window).width();
            console.log(windowWidth)
            if(windowWidth < 1024) {
                console.log(windowWidth)
                $('.sidebar').removeClass('active');
                $('.box-sidebar-container').removeClass('active');
            }
            else {
                $('.sidebar').addClass('active');
                $('.box-sidebar-container').addClass('active');
            }
        }
    </script>
</body>

</html>