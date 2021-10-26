<?php

try{
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
} catch (PDOException $e) {
    print('
    <!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="UTF-8">
            <title>ログイン画面</title>
            <link rel = "stylesheet" type = "text/css" href = "regist.css">
        </head>

        <body>

            <header>ナビゲーションバー</header>
            <main>
                
                <div class="main_container">
                    <div class="page_name">ログイン画面</div>

                    <div class="kanryo er">エラーが発生したためログイン情報を取得できません。</div>

                    <div class="submit_box">
                        <form action="login.php">
                            <input type="submit" class="submit" value="ログイン画面へ戻る">
                        </form>
                    </div>

                </div>
            </main>

            <footer>フッター</footer>

        </body>
    </html>
    ');
    die();
}

$stmt=$pdo->prepare("select * from diworks_blogs where mail=:mail");
$stmt->bindParam(':mail', $_POST['mail']);
$stmt->execute();
    
if(isset($_POST['mail'])) {
if($rows = $stmt->fetch()) {
if(password_verify($_POST['password'], $rows["password"])) {
    $msg = ('ログイン完了しました。');
    $link = '<a href="d.i.blog.html">ホーム</a>';
} else {
    $msg = 'メールアドレスもしくはパスワードが間違っています。';
    $link = '<a href="login.php">戻る</a>';
}
}
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ログイン画面</title>
        <link rel = "stylesheet" type = "text/css" href = "regist.css">
    </head>
    
    <body>

        <header>ナビゲーションバー</header>
        <main>

            <div class="main_container">
                <div class="page_name">ログイン画面</div>

                <div class="kanryo"><?php echo $msg; ?></div>
                <div class="submit_box submit"><?php echo $link; ?></div>
            </div>
        </main>

        <footer>フッター</footer>
    </body>
    
</html>
