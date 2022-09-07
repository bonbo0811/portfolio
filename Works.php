<?php 
    $title = '大久保賢人のポートフォリオ';
    include_once('./parts/link.php');
?>

<body>

    <div class="container">

    <?php 
        include_once('./parts/header.php');
    ?>

            <div class="block-main text-center" >
                <div class="box-profile" id="js-tab">
                    <h2 class="sub-title mb-4">
                        - <span class="color-blue">W</span>orks -
                    </h2>
                    <div class="tab-nav text-center mt-3">
                        <a href="" class="tab-nav-item is-active" data-nav="0">Webアプリ</a>
                        <a href="" class="tab-nav-item" data-nav="1">ホームページ</a>
                        <a href="" class="tab-nav-item" data-nav="2">ブログ</a>
                    </div>
                </div>
            </div>

            <div class="quiz-list list-group col-md-7 mt-4 m-auto px-3">
                <span class="list-group-item list-group-item-action active list-img bg-primary" aria-current="true">
                    一覧
                </span>

                <!-- Webアプリ -->
                <div class="tab-contents-item" data-content="0">
                <a href="" class="list-group-item list-group-item-action">
                    Webアプリ
                </a>
                </div>

                <!-- ホームページ -->
                <div class="tab-contents-item" data-content="1">
                
                </div>

                <!-- ブログ -->
                <div class="tab-contents-item" data-content="2">
                
                </div>
            </div>
        <?php 
            include_once('./parts/footer.php');
        ?>
    </div>
    <script type="text/javascript" src="./JavaScript/tab.js"></script>
    </body>
</html>