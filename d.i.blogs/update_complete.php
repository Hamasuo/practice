<?php

try{
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

    $pdo->exec("update diworks_blogs set family_name = '".$_POST['family_name']."', last_name = '".$_POST['last_name']."', family_name_kana = '".$_POST['family_name_kana']."', last_name_kana = '".$_POST['last_name_kana']."', mail = '".$_POST['mail']."', gender = '".$_POST['gender']."', postal_code = '".$_POST['postal_code']."', prefecture = '".$_POST['prefecture']."', address_1 = '".$_POST['address_1']."', address_2 = '".$_POST['address_2']."', authority = '".$_POST['authority']."', update_time = '".date('Y-m-d H:i:s')."' where id = ".$_POST['id']);
    //$pdo->exec("update diworks_blogs set delete_flag = '1', update_time = '".date('Y-m-d H:i:s')."' where id = ".$_POST['id']);
    //エラー表示なし：更新できない＞原因究明
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
            <title>アカウント更新完了画面</title>
            <link rel = "stylesheet" type = "text/css" href = "regist.css">
        </head>

        <body>

            <header>ナビゲーションバー</header>
            <main>
                
                <div class="main_container">
                    <div class="page_name">アカウント更新完了画面</div>

                    <div class="kanryo er">エラーが発生したためアカウント更新できません。</div>

                    <div class="submit_box">
                        <form action="d.i.blog.html">
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
        <title>アカウント更新完了画面</title>
        <link rel = "stylesheet" type = "text/css" href = "regist.css">
    </head>
    
    <body>
        
        <header>ナビゲーションバー</header>
        <main>
            
            <div class="main_container">
                <div class="page_name">アカウント更新完了画面</div>
                
                <div class="kanryo">更新完了しました</div>
                
                <div class="submit_box">
                    <form action="d.i.blog.html">
                        <input type="submit" class="submit" value="TOPページへ戻る">
                    </form>
                </div>
                
            </div>
        </main>
        
        <footer>フッター</footer>
               
    </body>
</html>
