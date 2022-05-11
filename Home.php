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
                <div class="box-profile">
                    <h2 class="sub-title mb-3">
                        << <span class="color-blue">P</span>rofile >>
                    </h2>
                    <div class="item-list mt-4">
                        <img src="./images/MyProfile.jpg" alt="プロフィール画像">
                        <b>大久保 賢人</b>
                        <p class="color-blue">HTML / CSS / PHP / MySQL /Laravel /Adobe XD / WordPress</p>
                        <p>2021年9月よりプログラミングを開始。<br>
                            ワードプレスによるブログの開設経験があり、サーバー環境の設計も経験済みです。<br><br>
                            前職ではサービス業。クライアントの理想を引き出す事を第一にしています。
                        </p>
                    </div>
                    <ul class="icon-list justify-content-center">
                        <li>
                            <a href="https://github.com/bonbo0811" target="_blank" rel="noopener noreferrer"><img src="./images/github.png" alt="GitHubのアイコン"></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/WD_PG_okubo" target="_blank" rel="noopener noreferrer"><img src="./images/twitter.png" alt="Twitterのアイコン" class="rounded"></a>
                        </li>
                        <li>
                            <a href=""><img src="./images/instagram.png" alt="instagramのアイコン"></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="box-works">
                <h2 class="sub-title mb-3">
                    << <span class="color-blue">W</span>orks >>
                </h2>

                <ul class="works-list">
                    <li>
                        <a href="TwitterClone.php"><img src="./images/work_1.png" alt="TwitterCloneの画像"></a>
                        <h3>Twitteクローン</h3>
                        <span class="color-blue">HTML / CSS /PHP / MySQL</span>
                        <div class="link justify-content-left mb-2">
                            <a href="https://techkento.com/TwitterClone/Controllers/sign-in.php" target="_blank" rel="noopener noreferrer">Webサイト</a>
                            <a href="https://github.com/bonbo0811/TwitterClone" target="_blank" rel="noopener noreferrer">GitHub</a>
                        </div>
                    </li>

                    <li>
                        <a href="kakeibo.php"><img class="pix" src="./images/kakeibo.png" alt="家計簿の画像"></a>
                        <h3>家計簿アプリ</h3>
                        <span class="color-blue">HTML / CSS /PHP / Laravel / MySQL</span>
                        <div class="link justify-content-left mb-2">
                            <a href="#" target="_blank" rel="noopener noreferrer">Webサイト</a>
                            <a href="https://github.com/bonbo0811/kakeibo" target="_blank" rel="noopener noreferrer">GitHub</a>
                        </div>
                    </li>

                    <li class="three">
                        <a href="Work-Out.php"><img src="./images/Work-Out.png" alt="Work-Outの画像"></a>
                        <h3>Work-Out</h3>
                        <span class="color-blue">HTML / CSS /PHP / Laravel / MySQL</span>
                        <div class="link justify-content-left mb-2">
                            <a href="#" target="_blank" rel="noopener noreferrer">Webサイト</a>
                            <a href="https://github.com/bonbo0811/Work-Out" target="_blank" rel="noopener noreferrer">GitHub</a>
                        </div>
                    </li>

                    <li>
                        <a href="koen-yoyaku.php"><img src="./images/講演会予約サイト.png" alt="講演会予約サイトの画像"></a>
                        <h3>講演会予約サイト</h3>
                        <span class="color-blue">HTML / CSS / PHP/ Laravel / MySQL</span>
                        <div class="link justify-content-left mb-2">
                            <a href="https://www.seminarreserve.shop/" target="_blank" rel="noopener noreferrer">Webサイト</a>
                        </div>
                    </li>
                </ul>
            </div>

            <?php 
                include_once('./parts/footer.php');
            ?>
        
    </div>
        
    </body>
</html>