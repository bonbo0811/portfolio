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
                <a href="" class="tab-nav-item tab-nav-item-blog" data-nav="2">ブログ</a>
            </div>

            <!-- Webアプリ-->
            <div class="tab-contents-item" data-content="0">
                <div class="box-works py-0">

                    <ul class="works-list">
                        <li>
                            <a href="TwitterClone.php"><img src="./images/work_1.png" alt="TwitterCloneの画像"></a>
                            <h3>Twitteクローン</h3>
                            <span class="color-blue">HTML / CSS /PHP / MySQL</span>
                            <div class="link justify-content-left mb-2">
                                <a class="btn btn-outline-secondary" href="https://techkento.com/TwitterClone/Controllers/sign-in.php" target="_blank" rel="noopener noreferrer">Webサイト</a>
                                <a class="btn btn-outline-secondary" href="https://github.com/bonbo0811/TwitterClone" target="_blank" rel="noopener noreferrer">GitHub</a>
                            </div>
                        </li>

                        <li>
                            <a href="kakeibo.php"><img class="pix" src="./images/kakeibo.png" alt="家計簿の画像"></a>
                            <h3>家計簿アプリ</h3>
                            <span class="color-blue">HTML / CSS /PHP / Laravel / MySQL</span>
                            <div class="link justify-content-left mb-2">
                                <a class="btn btn-outline-secondary" href="https://kakeibo.shop/" target="_blank" rel="noopener noreferrer">Webサイト</a>
                                <a class="btn btn-outline-secondary" href="https://github.com/bonbo0811/kakeibo" target="_blank" rel="noopener noreferrer">GitHub</a>
                            </div>
                        </li>

                        <li class="three">
                            <a href="Work-Out.php"><img src="./images/Work-Out.png" alt="Work-Outの画像"></a>
                            <h3>Work-Out</h3>
                            <span class="color-blue">HTML / CSS /PHP / Laravel / MySQL</span>
                            <div class="link justify-content-left mb-2">
                                <a class="btn btn-outline-secondary" href="http://13.115.77.9/" target="_blank" rel="noopener noreferrer">Webサイト</a>
                                <a class="btn btn-outline-secondary" href="https://github.com/bonbo0811/Work-Out" target="_blank" rel="noopener noreferrer">GitHub</a>
                            </div>
                        </li>

                        <li>
                            <a href="koen-yoyaku.php"><img src="./images/講演会予約サイト.png" alt="講演会予約サイトの画像"></a>
                            <h3>講演会予約サイト</h3>
                            <span class="color-blue">HTML / CSS / PHP/ Laravel / MySQL</span>
                            <div class="link justify-content-left mb-2">
                                <a class="btn btn-outline-secondary" href="https://www.seminarreserve.shop/" target="_blank" rel="noopener noreferrer">Webサイト</a>
                            </div>
                        </li>

                        <li>
                            <a href="JavaScript-Quiz.php"><img src="./images/JavaScript-Quiz.png" alt="講演会予約サイトの画像"></a>
                            <h3>JavaScript-Quiz</h3>
                            <span class="color-blue">HTML / CSS / PHP/ JavaScript</span>
                            <div class="link justify-content-left mb-2">
                                <a class="btn btn-outline-secondary" href="https://jp-javascript-quiz.herokuapp.com/" target="_blank" rel="noopener noreferrer">Webサイト</a>
                                <a class="btn btn-outline-secondary" href="https://github.com/bonbo0811/JavaScript-Quiz" target="_blank" rel="noopener noreferrer">GitHub</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- ホームページ -->
            <div class="tab-contents-item" data-content="1">
                <div class="box-works py-0">
                    
                </div>
            </div>

            <!-- ブログ -->
            <div class="tab-contents-item" data-content="2">
                <div class="box-works py-0">

                    <ul class="works-list">
                        <li>
                            <a href="syogaku_toshi.php"><img src="./images/syogaku_toshi.png" alt="無理なく始める少額投資の画像"></a>
                            <h3>無理なく始める少額投資</h3>
                            <span class="color-blue">ワードプレス / お名前.com / SSL済み</span>
                            <div class="link justify-content-left mb-2">
                                <a class="btn btn-outline-secondary" href="https://www.goodlifelabo.net/" target="_blank" rel="noopener noreferrer">Webサイト</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <?php 
        include_once('./parts/footer.php');
        ?>

        <!-- TOPへ戻る -->
        <?php 
            include_once('./parts/page_top.php');
        ?>

    </div>

<script type="text/javascript" src="./JavaScript/tab.js"></script>
</body>

</html>