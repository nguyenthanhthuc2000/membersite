<header class=" container-fluid ">
    <div class="top-header d-flex justify-content-between align-items-center mb-1">
        <div class="top-header-left">
            <div class="logo">
                <img src="<?php echo $this->setting['logo'] ?>" alt="logo" border="0" class="img-fluid">
            </div>
        </div>
        <div class="top-header-right">
            <a href="<?php  ?>" class="btn-login txt_color">ログイン</a>
            <a href="" class="btn-login txt_color">新規登録</a>
        </div>
    </div>

    <div class="row bg_color <?php if($this->setting['search'] == 0) echo 'd-none' ?>" >
        <form>
            <div class="input-group mb-3">

                <input type="text" class="form-control input-search" aria-label="Text input with dropdown button" placeholder="キーワード検索">
                <button style="background: none; border: none;">
                    <i class="fa-solid fa-magnifying-glass icon-search"></i>
                </button>
            </div>
        </form>
    </div>

</header>