<?php

mb_internal_encoding("utf8");

$delete_flag="0";
$registered_time="";
$hash_pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

try {
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $pdo->exec("insert into diworks_blog(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority,delete_flag,registered_time) values ('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','".$hash_pass."','".$_POST['gender']."','".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['address_1']."','".$_POST['address_2']."','".$_POST['authority']."','".$delete_flag."','".date("Y-m-d H:i:s")."');");
} catch (PDOException $e) {
//    print('<font color="#FF0000">エラーが発生したためアカウント登録できません。</font>');
    print('<!doctype HTML>
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
    
        <div class="complete-container">
        
        
    
        <div class="left_1">
            
            <div class="page_name">アカウント登録確認画面</div>
            
        </div>

        <div class="right_1"></div>
            
        <div class="center">
            
            <div class="shippai">エラーが発生したためアカウント登録できません。</div>
            
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

</html>');
    die();
}

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
    
        <div class="complete-container">
        
        
    
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