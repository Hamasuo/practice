<?php

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

$delete_flag="";
$registered_time="";

$pdo->exec("insert into diworks_blog(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority,delete_flag,registered_time) values ('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','".$_POST['password']."','".$_POST['gender']."','".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['address_1']."','".$_POST['address_2']."','".$_POST['authority']."','".$delete_flag."','".$registered_time."');");

?>

<!doctype HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録画面</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
    </head>
    
<body>
    
<header>
    <div class="logo">ナビゲーションバー</div>
</header>

<main>
    
        <div class="main-container">
        
        
    
        <div class="left_1">
            
            <div class="page_name">アカウント登録確認画面</div>
            
        </div>

        <div class="right_1"></div>
            
        <div class="center">
            
            <div class="kanryo">登録完了しました</div>

            <form action="regist.php">
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