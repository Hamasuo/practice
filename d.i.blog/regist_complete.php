<?php

mb_internal_encoding("utf8");

$pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

$pdo->exec("insert into diworks_blog(id,family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority,delete_flag,registered_time,update_time)values
('".$_POST['id']."','".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','".$_POST['password']."','".$_POST['gender']."','".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['address_1']."','".$_POST['address_2']."','".$_POST['authority']."','".$_POST['delete_flag']."','".$_POST['registered_time']."','".$_POST['update_time']."');");

?>

<!DOCTYPE html>
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
        
        <div class="page_name">アカウント登録画面</div>

        
        
        
    </div> 
</main>
    

<footer>
   フッター
</footer>
    
</body>

</html>