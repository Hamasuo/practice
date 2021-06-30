<?php
//,family_name_kana = $_POST['last_name'],last_name_kana = $_POST['last_name_kana'],mail = $_POST['mail'],password = $_POST['password'],gender = $_POST['gender'],postal_code = $_POST['postal_code'],prefecture = $_POST['prefecture'],address_1 = $_POST['address_1'],address_2 = $_POST['address_2'],authority = $_POST['authority']
//データ送信とならない

try {
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $pdo->exec("update diworks_blog set family_name = '".$_POST['family_name']."' , last_name = '".$_POST['last_name']."' where id = ".$_POST['id']);
} catch (PDOException $e) {
    print('');
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