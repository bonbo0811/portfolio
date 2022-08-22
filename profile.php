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
                        <p>2021年9月よりプログラミングを開始。主にWebサイトの作成、バックエンド処理を得意としています。<br>
                            ワードプレスによるブログの開設経験があり、サーバー環境の設計も経験済みです。<br><br>
                            前職ではサービス業。依頼者の希望に沿う事を重視します。
                        </p>
                    </div>
                    <ul class="icon-list justify-content-center">
                        <li>
                            <a href="https://github.com/bonbo0811" target="_blank" rel="noopener noreferrer"><img src="./images/github.png" alt="GitHubのアイコン"></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/WD_PG_okubo" target="_blank" rel="noopener noreferrer"><img src="./images/twitter.png" alt="Twitterのアイコン" class="rounded"></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="box-works">
                <h2 class="sub-title mb-3">
                    << <span class="color-blue">P</span>rofile >>
                </h2>

                <div>

                </div>

            <?php 
                include_once('./parts/footer.php');
            ?>
        
    </div>
        
    </body>
</html>