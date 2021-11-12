<?php
mb_internal_encoding("utf8");

$delete_flag="0";
$registered_time="";
$update_time="";
$hash_pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

try{
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

    $pdo->exec("insert into diworks_blogs(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority,delete_flag,registered_time,update_time)values('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','".$hash_pass."','".$_POST['gender']."','".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['address_1']."','".$_POST['address_2']."','".$_POST['authority']."','".$delete_flag."','".date('Y-m-d H:i:s')."','".date('Y-m-d H:i:s')."');");
/*
family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority
//'".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','".$hash_pass."','".$_POST['gender']."','".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['address_1']."','".$_POST['address_2']."','".$_POST['authority']."','".$delete_flag."','".date('Y-m-d H:i:s')."','".date('Y-m-d H:i:s')."'
*/
} catch (PDOException $e) {
    print('
    <!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="UTF-8">
            <title>アカウント登録完了画面</title>
            <link rel = "stylesheet" type = "text/css" href = "regist.css">
        </head>

        <body>

            <header>ナビゲーションバー</header>
            <main>
                
                <div class="main_container">
                    <div class="page_name">アカウント登録完了画面</div>

                    <div class="kanryo er">エラーが発生したためアカウント登録できません。</div>

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
        <title>アカウント登録完了画面</title>
        <link rel = "stylesheet" type = "text/css" href = "regist.css">
    </head>
    
    <body>
        
        <header>ナビゲーションバー</header>
        <main>
            
            <div class="main_container">
                <div class="page_name">アカウント登録完了画面</div>
                
                <div class="kanryo">登録完了しました</div>
                
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
