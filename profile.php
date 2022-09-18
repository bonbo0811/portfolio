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
                    - <span class="color-blue">A</span>bout -
                </h2>
                <div class="item-list mt-4">
                    <p class="mb-3">愛知県在住プログラマーの大久保賢人です。<br><br>
                        2021年からプログラミングを始め、複数のサイト作成を作成しています。<br>
                    </p>
                </div>
                <div class="item-list mt-4">
                    <img src="./images/MyProfile.jpg" alt="プロフィール画像">
                </div>
            </div>
        </div>

        <div class="col-md-6 m-auto mt-3">
            <table class="table table-borderless">
                <tr><td>Name: </td><td>大久保 賢人</td></tr>
                <tr><td>Place: </td><td>愛知</td></tr>
                <tr><td>Email: </td><td>goodlifelabo3@gmail.com</td></tr>
                <tr><td>Works: </td><td>Webサイトのデザインと作成、運用 / ブログ、SNSの運用代行</td></tr>
                <tr><td>Skills: </td><td>HTML / CSS / PHP / MySQL /Laravel / AWS /Adobe XD / WordPress</td></tr>
            </table>

            <h2 class="sub-title mt-4 mb-3">
                - <span class="color-blue">S</span>NS -
            </h2>

            <ul class="icon-list justify-content-center">
                <li>
                    <a href="https://github.com/bonbo0811" target="_blank" rel="noopener noreferrer"><img src="./images/github.png" alt="GitHubのアイコン"></a>
                </li>
                <li>
                    <a href="https://twitter.com/WD_PG_okubo" target="_blank" rel="noopener noreferrer"><img src="./images/twitter.png" alt="Twitterのアイコン" class="rounded"></a>
                </li>
            </ul>
        </div>

        <?php 
            include_once('./parts/footer.php');
        ?>
    
        <!-- TOPへ戻る -->
        <?php 
            include_once('./parts/page_top.php');
        ?>

    </div>
        
</body>

</html>