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
                - <span class="color-blue">W</span>orks -
            </h2>
                <ul class="works-list">
                    <li>
                    <img src="./images/syogaku_toshi.png" alt="無理なく始める少額投資の画像">
                    </li>
                    <li>
                        <h3>無理なく始める少額投資</h3>
                        <span class="workpage color-blue">ワードプレス / お名前.com / SSL済み</span>
                        <div class="link justify-content-left workpage">
                            <a class="btn btn-outline-secondary" href="https://www.goodlifelabo.net/" target="_blank" rel="noopener noreferrer">Webサイト</a>
                        </div> 
                        <p class="workpage">
                            2020年から始めている投資運用の記録ブログです。<br><br>
                            「Wealthnavi」、「つみたてNISA」などの投資の結果レポート<br><br>
                            「投資の考え方」、「運用のモチベーション」等のお金を味方につけるための考え方について書いています。<br>
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
