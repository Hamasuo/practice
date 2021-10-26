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
//if($rows["password"] ==  $_POST['password']) {
//if(password_verify($_POST['pass'], $result['password'])){
//ログイン成功
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

                <div class="kanryo">ログイン完了しました。</div>
                <div class="submit_box">
                    <form method="post" action="test.php">
                        <input type="submit" class="submit" value="TOPページへ移動">
                        <input type="hidden" value="<?php echo $_POST['id']; ?>" name="id">
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
else {
print ('
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ログイン画面</title>
        <link rel = "stylesheet" type = "text/css" href = "regist.css">
    </head>
    
    <script src="login.js" type="text/javascript"></script>
    <body>
        
        <header>ナビゲーションバー</header>
        <main>
                        
            <div class="login_container">
                <div class="page_name">ログイン画面</div>
                
                <form method="post" action="" name="login_form" onsubmit="return Check()">
                
                    <table class="login_form" border="0" cellspacing="30">
                        <tr>
                            <td></td>
                            <td>
                                <div class="comment">メールアドレスまたはパスワードに誤りがあります。</div>
                            </td>
                        </tr>
                        <tr>
                            <td>メールアドレス</td>
                            <td>
                                <input type="text" class="text" maxlength="100" name="mail">
                                <!--
                                <div class="check_error" id="mail_error"></div>
                                -->
                            </td>
                        </tr>
                        <tr>
                            <td>パスワード</td>
                            <td>
                                <input type="text" class="text" maxlength="10" name="password">
                                <!--
                                <div class="check_error" id="password_error"></div>
                                -->
                            </td>
                        </tr>

                    </table>

                    <div class="submit_box">
                        <input type="submit" class="submit" value="確認する">
                    </div>
                    
                </form>
                
            </div>
        </main>
        
        <footer>フッター</footer>
               
    </body>
</html>
');
die();
}
}else {
print ('
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ログイン画面</title>
        <link rel = "stylesheet" type = "text/css" href = "regist.css">
    </head>
    
    <script src="login.js" type="text/javascript"></script>
    <body>
        
        <header>ナビゲーションバー</header>
        <main>
                        
            <div class="login_container">
                <div class="page_name">ログイン画面</div>
                
                <form method="post" action="" name="login_form" onsubmit="return Check()">
                
                    <table class="login_form" border="0" cellspacing="30">
                        <tr>
                            <td></td>
                            <td>
                                <div class="comment">メールアドレスとパスワードが未入力です。</div>
                            </td>
                        </tr>
                        <tr>
                            <td>メールアドレス</td>
                            <td>
                                <input type="text" class="text" maxlength="100" name="mail">
                                <!--
                                <div class="check_error" id="mail_error"></div>
                                -->
                            </td>
                        </tr>
                        <tr>
                            <td>パスワード</td>
                            <td>
                                <input type="text" class="text" maxlength="10" name="password">
                                <!--
                                <div class="check_error" id="password_error"></div>
                                -->
                            </td>
                        </tr>

                    </table>

                    <div class="submit_box">
                        <input type="submit" class="submit" value="確認する">
                    </div>
                    
                </form>
                
            </div>
        </main>
        
        <footer>フッター</footer>
               
    </body>
</html>
');
die();
}
}

/*
<?php
if(isset($_POST['user'])) {
$dsn='mysql:dbname=EC;charset=utf8';
$user='ユーザー名';
$password='パスワード';
$dbh = new PDO($dsn,$user,$password);

$stmt = $dbh->prepare("SELECT * FROM user WHERE id=:user");
$stmt->bindParam(':user', $_POST['user']);
$stmt->execute();
if($rows = $stmt->fetch()) {
if($rows["password"] ==  $_POST['password']) {
print "<p>ログイン成功</p>";
}else {
print "<p>ログイン失敗</p>";
}
}else {
print "<p>ログイン失敗</p>";
}
}
?>
*/
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
                        
            <div class="login_container">
                <div class="page_name">ログイン画面</div>
                
                <form method="post" action="" name="login_form">
                <!--<form method="post" action="d.i.blog.html" name="login_form"></form>-->
                
                    <table class="login_form" border="0" cellspacing="30">

                        <tr>
                            <td>メールアドレス</td>
                            <td>
                                <input type="text" class="text" maxlength='100' name="mail">
                            </td>
                        </tr>
                        <tr>
                            <td>パスワード</td>
                            <td>
                                <input type="text" class="text" maxlength='10' name="password">
                            </td>
                        </tr>

                    </table>

                    <div class="submit_box">
                        <input type="submit" class="submit" value="確認する">
                    </div>
                    
                </form>
                
            </div>
        </main>
        
        <footer>フッター</footer>
               
    </body>
</html>



