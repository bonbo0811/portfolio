<?php 
    $title = '大久保賢人のポートフォリオ';
    include_once('./parts/link.php');
?>

<body>

    <div class="container">

    <?php 
        include_once('./parts/header.php');
    ?>

    <div class="col-md-7 text-center mt-5 m-auto">
        <h2 class="sub-title mb-4">
            - <span class="color-blue">W</span>orks -
        </h2>
    </div>

    <div class="tab" id="js-tab">
        <div class="tab-nav text-center">
            <a href="" class="tab-nav-item is-active" data-nav="0">Webアプリ</a>
            <a href="" class="tab-nav-item" data-nav="1">ホームページ</a>
            <a href="" class="tab-nav-item" data-nav="2">ブログ</a>
        </div>

        <div class="quiz-list list-group col-md-7 mt-4 m-auto px-3">
            <span class="list-group-item list-group-item-action active list-img bg-primary" aria-current="true">
                クイズ一覧
            </span>

            <!-- エンタメクイズ -->
            <div class="tab-contents-item" data-content="0">
                <a href="quiz-fashions.php" class="list-group-item list-group-item-action">
                    <img src="images/fashion_image.jpeg" alt="アイコン" width="25" height="25" class="d-inline-block align-text-top ms-2">
                    ファッション
                </a>
                <a href="quiz-games.php" class="list-group-item list-group-item-action ">
                    <img src="images/game_image.jpeg" alt="アイコン" width="25" height="25" class="d-inline-block align-text-top ms-2">
                    ゲーム
                </a>
                <a href="quiz-movies.php" class="list-group-item list-group-item-action">
                    <img src="images/movie_image.jpeg" alt="アイコン" width="25" height="25" class="d-inline-block align-text-top ms-2">
                    映画
                </a>
                <a href="quiz-comics.php" class="list-group-item list-group-item-action">
                    <img src="images/comic_image.jpeg" alt="アイコン" width="25" height="25" class="d-inline-block align-text-top ms-2">
                    マンガ
                </a>
                <a href="quiz-foods.php" class="list-group-item list-group-item-action">
                    <img src="images/food_image.jpeg" alt="アイコン" width="25" height="25" class="d-inline-block align-text-top ms-2">
                    食べ物
                </a>
            </div>

            <!-- 勉強クイズ -->
            <div class="tab-contents-item" data-content="1">
                <a href="quiz-englishwords.php" class="list-group-item list-group-item-action">
                    <img src="images/englishword.jpeg" alt="アイコン" width="25" height="25" class="d-inline-block align-text-top ms-2">
                    英単語
                </a>
                <a href="quiz-kotowaza.php" class="list-group-item list-group-item-action">
                    <img src="images/kotowaza.jpeg" alt="アイコン" width="25" height="25" class="d-inline-block align-text-top ms-2">
                    ことわざ
                </a>
                <a href="quiz-kanji.php" class="list-group-item list-group-item-action">
                    <img src="images/kanji.jpeg" alt="アイコン" width="25" height="25" class="d-inline-block align-text-top ms-2">
                    漢字
                </a>
                <a href="quiz-sciences.php" class="list-group-item list-group-item-action">
                    <img src="images/science.jpeg" alt="アイコン" width="25" height="25" class="d-inline-block align-text-top ms-2">
                    理科
                </a>
                <a href="quiz-maths.php" class="list-group-item list-group-item-action">
                    <img src="images/math.jpeg" alt="アイコン" width="25" height="25" class="d-inline-block align-text-top ms-2">
                    数学
                </a>
            </div>

            <!-- 教養クイズ -->
            <div class="tab-contents-item" data-content="2">
                <a href="quiz-manners.php" class="list-group-item list-group-item-action">
                    <img src="images/manner.jpeg" alt="アイコン" width="25" height="25" class="d-inline-block align-text-top ms-2">
                    一般マナー
                </a>
                <a href="quiz-estate.php" class="list-group-item list-group-item-action">
                    <img src="images/estate.jpeg" alt="アイコン" width="25" height="25" class="d-inline-block align-text-top ms-2">
                    不動産
                </a>
                <a href="quiz-inventment.php" class="list-group-item list-group-item-action">
                    <img src="images/inventment.jpeg" alt="アイコン" width="25" height="25" class="d-inline-block align-text-top ms-2">
                    投資
                </a>
            </div>
        </div>
    </div>

            <!-- <div class="block-main text-center" >
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
    </div> -->
    <script type="text/javascript" src="./JavaScript/tab.js"></script>
    </body>
</html>