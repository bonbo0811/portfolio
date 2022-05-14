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
                    <img src="./images/Work-Out.png" alt="Work-Outの画像">
                    </li>
                    <li>
                        <h3>Work-Out</h3>
                        <span class ="workpage color-blue">HTML / CSS /PHP / Laravel / MySQL</span>
                        <div class="link justify-content-left workpage">
                            <a href=" " target="_blank" rel="noopener noreferrer">Webサイト</a>
                            <a href="https://github.com/bonbo0811/Work-Out" target="_blank" rel="noopener noreferrer">GitHub</a>
                        </div> 
                        <p class="workpage">
                            ログインユーザーでプロジェクト単位のToDoを管理できるWebアプリケーションです。<br><br>
                            ユーザー作成、ログイン機能、投稿機能、投稿、ユーザーまたは投稿の検索が行えます。<br><br>
                            サーバーはさくらのVPS、ドメインはお名前ドットコムを利用しました。<br><br>
                            SSL済みです。
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
