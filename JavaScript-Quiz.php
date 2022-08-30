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
                    <img src="./images/JavaScript-Quiz.png" alt="Work-Outの画像">
                    </li>
                    <li>
                        <h3>JavaScript-Quiz</h3>
                        <span class ="workpage color-blue">HTML / CSS / PHP/ JavaScript</span><br>
                        <span class ="workpage color-blue">サーバー / Heroku </span>
                        <!-- <span class ="workpage color-blue">AWS / Lightsail </span> -->
                        <div class="link justify-content-left workpage">
                            <a class="btn btn-outline-secondary" href="https://jp-javascript-quiz.herokuapp.com/" target="_blank" rel="noopener noreferrer">Webサイト</a>
                            <a class="btn btn-outline-secondary" href="https://github.com/bonbo0811/JavaScript-Quiz" target="_blank" rel="noopener noreferrer">GitHub</a>
                        </div> 
                        <p class="workpage">
                            JavaScriptの勉強するために作成したクイズゲームです。<br><br>
                            データベースは使わず、JavaScriptによって問題の書き換えや正誤判定を行い、ページ読み込みなしでのテキスト、画像を変更を行っています。<br><br>
                            今後もクイズを追加していく予定です。<br><br>
                            
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
