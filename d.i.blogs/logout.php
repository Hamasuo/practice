<?php
session_start();
$_SESSION = array();//セッションの中身をすべて削除
session_destroy();//セッションを破壊
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ログアウト画面</title>
        <link rel = "stylesheet" type = "text/css" href = "regist.css">
    </head>
    
    <body>

        <header>ナビゲーションバー</header>
        <main>

            <div class="main_container login">
                <div class="login">
                    <div class="page_name">ログアウト画面</div>

                    <div class="kanryo">ログアウトしました。</div>
                    <div class="submit_box">
                        <form action="login.php">
                            <input type="submit" class="submit" value="ログイン画面へ戻る">
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <footer>フッター</footer>
    </body>
    
</html>