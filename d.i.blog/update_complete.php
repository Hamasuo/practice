<?php

$hash_pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

try {
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $pdo->exec("update diworks_blog set family_name = '".$_POST['family_name']."', last_name = '".$_POST['last_name']."', family_name_kana = '".$_POST['family_name_kana']."', last_name_kana = '".$_POST['last_name_kana']."', mail = '".$_POST['mail']."', password = '".$hash_pass."', gender = '".$_POST['gender']."', postal_code = '".$_POST['postal_code']."', prefecture = '".$_POST['prefecture']."', address_1 = '".$_POST['address_1']."', address_2 = '".$_POST['address_2']."', authority = '".$_POST['authority']."',  update_time = '".date('Y-m-d H:i:s')."' where id = ".$_POST['id']);
} catch (PDOException $e) {
    print('
    <!doctype HTML>
    <html lang="ja">
        <head>
            <meta charset="UTF-8">
            <title>アカウント更新完了画面</title>
            <link rel="stylesheet" type="text/css" href="regist.css">
        </head>

    <body>

    <header>ナビゲーションバー</header>

    <main>

            <div class="complete-container">



            <div class="left_1">

                <div class="page_name">アカウント更新完了画面</div>

            </div>

            <div class="right_1"></div>

            <div class="center">

                <div class="kanryo">更新完了しました</div>

                <form action="list.php" class="ok_button">
                    <input type="submit" value="TOPページへ戻る">
                </form>

            </div>

        </div>
    </main>


    <footer>
       フッター
    </footer>

    </body>

    </html>
    ');
    die();
}
?>

<!doctype HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント更新完了画面</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
    </head>
    
<body>
    
<header>ナビゲーションバー</header>

<main>
    
        <div class="complete-container">
        
        
    
        <div class="left_1">
            
            <div class="page_name">アカウント更新完了画面</div>
            
        </div>

        <div class="right_1"></div>
            
        <div class="center">
            
            <div class="kanryo">更新完了しました</div>
            
            <form action="list.php" class="ok_button">
                <input type="submit" value="TOPページへ戻る">
            </form>
            
        </div>
            
    </div>
</main>
    

<footer>
   フッター
</footer>
    
</body>

</html>