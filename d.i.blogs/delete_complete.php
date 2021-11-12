<?php
    
try {
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $pdo->exec("update diworks_blogs set delete_flag = '1', update_time = '".date('Y-m-d H:i:s')."' where id = ".$_POST['id']);
} catch (PDOException $e) {
    print('
    <!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="UTF-8">
            <title>アカウント削除完了画面</title>
            <link rel = "stylesheet" type = "text/css" href = "regist.css">
        </head>

        <body>

            <header>ナビゲーションバー</header>
            <main>

                <div class="main_container">
                    <div class="page_name">アカウント削除完了画面</div>

                    <div class="kanryo er">エラーが発生したためアカウント削除できません。</div>

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
        <title>アカウント削除完了画面</title>
        <link rel = "stylesheet" type = "text/css" href = "regist.css">
    </head>
    
    <body>
        
        <header>ナビゲーションバー</header>
        <main>
            
            <div class="main_container">
                <div class="page_name">アカウント削除完了画面</div>
                
                <div class="kanryo">削除完了しました</div>
                
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
