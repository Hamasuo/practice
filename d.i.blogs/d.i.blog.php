<?php
mb_internal_encoding("utf8");

session_start();
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
$stmt=$pdo->query("select * from diworks_blogs where mail = '".$_POST['mail']."'");

if($rows = $stmt->fetch()) {
    $_SESSION['authority'] = $rows['authority'];
if ($_SESSION['authority'] == 1) {//管理者であるとき
    $regist = '<a href="./regist.php">アカウント登録</a>';
    $list = '<a href="./list.php">アカウント一覧</a>';
} else {//管理者でないとき
    $regist = '';
    $list = '';
}
}
?>

<!doctype html>
<html lang = "ja">
    <head>
        <meta charset="UTF-8">
        <title>d.i.blog</title> 
        <link rel = "stylesheet" type = "text/css" href = "style.css">
    </head>
    
    <body>
        
        <img src="photo/diblog_logo.jpg">
        
        <header>
            <div class = "logo">トップ</div>
            <ul>
                <li>プロフィール</li>
                <li>D.I.Blogについて</li>
                <li>問い合わせ</li>
                <li>その他</li>
                <li><?php echo $regist; ?></li>
                <li><?php echo $list; ?></li>
                <li><a href="./logout.php">ログアウト</a></li>
            </ul>
        </header>

        <main>

            <div class="maincontainer">

                <div class="left">
                    <h1>プログラミングに役立つ書類</h1>
                    <p class="day">2017年1月15日</p>
                    <img src="photo/bookstore.jpg" width="100%">
                    <p>D.I.BlogはD.I.Worksが提供する演習課題です。</p>

                    <p>記事中身</p>

                    <div class="gray_box">
                        <div class="box_pic">
                            <img src="photo/pic1.jpg">
                            <p>ドメイン</p>
                        </div>
                        <div class="box_pic">
                            <img src="photo/pic2.jpg">
                            <p>快適な環境</p>
                        </div>
                        <div class="box_pic">
                            <img src="photo/pic3.jpg">
                            <p>基礎</p>
                        </div>
                        <div class="box_pic">
                            <img src="photo/pic4.jpg">
                            <p>マーケティング入門</p>
                        </div>
                        <br>
                        <div class="box_pic">
                            <img src="photo/pic5.jpg">
                            <p>アクティブラーニング</p>
                        </div>
                        <div class="box_pic">
                            <img src="photo/pic6.jpg">
                            <p>CSS</p>
                        </div>
                        <div class="box_pic">
                            <img src="photo/pic7.jpg">
                            <p>リータブルコードとは</p>
                        </div>
                        <div class="box_pic">
                            <img src="photo/pic8.jpg">
                            <p>HTML</p>
                        </div>
                    </div>

                </div>

                <div class="right">

                    <b class="taitl1">人気の記事</b>
                    <div class="box_menu">
                    PHPオススメ本<br>
                    PHP MyAdminの使い方<br>
                    いま人気のエディタTops<br>
                    HTMLの基礎
                    </div>

                    <b class="taitl2">オススメリンク</b>
                    <div class="box_menu">
                    ﾃﾞｨｰｱｲﾜｰｸｽ株式会社<br>
                    XAMPPのダウンロード<br>
                    Eclipseのダウンロード<br>
                    Bracketsのダウンロード
                    </div>

                    <b class="taitl3">カテゴリ</b>
                    <div class="box_menu">
                    HTML<br>
                    PHP<br>
                    MySQL<br>
                    JavaScript
                    </div>

                </div>
            </div>
        </main>

        <footer>
            Copyright D.I.blog is the one which provides A to Z about programming
        </footer>
        
    </body>
</html>