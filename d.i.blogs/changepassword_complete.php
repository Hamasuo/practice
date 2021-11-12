<?php

$hash_pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
try {
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $pdo->exec("update diworks_blogs set password = '".$hash_pass."', update_time = '".date('Y-m-d H:i:s')."' where id = ".$_POST['id']);
} catch (PDOException $e) {
    print('
    <!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="UTF-8">
            <title>パスワード変更完了画面</title>
            <link rel = "stylesheet" type = "text/css" href = "regist.css">
        </head>

        <body>

            <header>ナビゲーションバー</header>
            <main>

                <div class="main_container">
                    <div class="page_name">パスワード変更完了画面</div>

                    <div class="kanryo er">エラーが発生したためパスワード変更できません。</div>

                    <div class="submit_box">
                        <form action="d.i.blog.php">
                            <input type="submit" class="submit" value="TOPページへ戻る">
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
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>パスワード変更完了画面</title>
        <link rel = "stylesheet" type = "text/css" href = "regist.css">
    </head>
    
    <body>
        
        <header>ナビゲーションバー</header>
        <main>
            
            <div class="main_container">
                <div class="page_name">パスワード変更完了画面</div>
                
                <div class="kanryo">変更完了しました</div>
                
                <div class="submit_box">
                    <form action="d.i.blog.php">
                        <input type="submit" class="submit" value="TOPページへ戻る">
                    </form>
                </div>
                
            </div>
        </main>
        
        <footer>フッター</footer>
               
    </body>
</html>
