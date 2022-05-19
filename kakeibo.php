<?php 
    $title = '大久保賢人のポートフォリオ';
    include_once('./parts/link.php');
?>

<body>

    <div class="container">

    <?php 
        include_once('./parts/header.php');
    ?>

    <div class="block-main text-center">
        <div class="box-works">
            <h2 class="sub-title mb-3">
                << <span class="color-blue">W</span>orks >>
            </h2>
                <ul class="works-list">
                    <li>
                    <img src="./images/kakeibo.png" alt="家計簿の画像">
                    </li>
                    <li>
                        <h3>家計簿アプリ</h3>
                        <span class ="workpage color-blue">HTML / CSS /PHP / Laravel /MySQL</span><br>
                        <span class ="workpage color-blue">XREA / SSL済み </span>
                        <div class="link justify-content-left workpage">
                            <a class="btn btn-outline-secondary" href="https://kakeibo.shop/" target="_blank" rel="noopener noreferrer">Webサイト</a>
                            <a class="btn btn-outline-secondary" href="https://github.com/bonbo0811/kakeibo" target="_blank" rel="noopener noreferrer">GitHub</a>
                        </div> 
                        <p class="workpage">
                            １カ月単位で出費を確認できるオリジナルの家計簿アプリです。<br><br>
                            ユーザー作成、ログイン機能、ユーザー単位で利用照会を行い、登録機能と登録内容の編集が行えます。<br><br>
                            出費をカテゴリー別にすることで何に使ったかがわかりやすくなっています。
                        </p>                  
                    </li>

                </ul>
        </div>
    </div>

    <?php 
        include_once('./parts/footer.php');
    ?>

</div>


</body>
</html>
