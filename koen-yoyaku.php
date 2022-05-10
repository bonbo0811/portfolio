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
                    <img src="./images/講演会予約サイト.png" alt="講演会予約サイトの画像">
                    </li>
                    <li>
                        <h3>講演会予約サイト</h3>
                        <span class ="workpage color-blue">HTML / CSS / PHP / Laravel / MySQL</span>
                        <div class="link justify-content-left workpage">
                            <a href="https://www.seminarreserve.shop/" target="_blank" rel="noopener noreferrer">Webサイト</a>
                            <a href="#">GitHub</a>
                        </div> 
                        <p class="workpage">
                            複数名のグループで作成した講演会の予約サイトです。<br>
                            ログイン機能、ユーザー作成機能、ユーザー編集や削除機能、講演会登録や編集、講演会の予約が行えます。<br><br>
                            私の担当したパートはユーザーの管理部分で一般ユーザーと管理者の2グループを区別して登録が可能です。<br><br>
                            メールアドレス : goodlifelabo1.gmail.com <br>
                            パスワード : Sample111 <br><br>
                            でログイン可能です。
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
