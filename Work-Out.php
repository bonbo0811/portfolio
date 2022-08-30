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
                    <img src="./images/Work-Out.png" alt="Work-Outの画像">
                    </li>
                    <li>
                        <h3>Work-Out</h3>
                        <span class ="workpage color-blue">HTML / CSS /PHP / Laravel / MySQL</span><br>
                        <span class ="workpage color-blue">AWS / Lightsail </span>
                        <div class="link justify-content-left workpage">
                            <a class="btn btn-outline-secondary" href="http://13.115.77.9/" target="_blank" rel="noopener noreferrer">Webサイト</a>
                            <a class="btn btn-outline-secondary" href="https://github.com/bonbo0811/Work-Out" target="_blank" rel="noopener noreferrer">GitHub</a>
                        </div> 
                        <p class="workpage">
                            ログインユーザーごとにプロジェクト単位のToDoを管理できるWebアプリケーションです。<br><br>
                            チームでの作業にも対応するため、プロジェクトやToDoに担当メンバーを割り当てる機能が付いています。<br><br>
                            
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
