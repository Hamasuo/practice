<?php
/*
if($_POST) {
$delete = $_POST["delete"];

//$mysqli = new mysqli("localhost","root","root","sampule_contact");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

if(isset($_POST['delete'],)){
$sql ="DELETE FROM contacts WHERE id = ?";
}
}

?>

if(isset($_POST['delete'])) {
  $delete = $_POST["delete"];
  $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
  $pdo -> autocommit ("FALSE");
  $sql = "DELETE FROM contacts WHERE id = ?";
  if ($stmt = $pdo->prepare($sql)) {
    $stmt->bind_param("i", $delete);
    $stmt->execute();
    $pdo->commit();
  }
  $pdo->close();
}


・スタイル変更
・デリート内容
・ボタン内容

<?php

if(isset($_POST['delete'])) {
  $delete = $_POST["delete"];
  $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
  $sql = "DELETE FROM contacts WHERE id = ?";
*/
    
try {
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $pdo->exec("update diworks_blog set delete_flag = '1', update_time = '".date('Y-m-d H:i:s')."' where id = ".$_POST['id']);
} catch (PDOException $e) {
    print('
<!doctype HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント削除完了画面</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
    </head>
    
<body>
    
<header>ナビゲーションバー</header>

<main>
    
        <div class="complete-container">
        
        
    
        <div class="left_1">
            
            <div class="page_name">アカウント削除完了画面</div>
            
        </div>

        <div class="right_1"></div>
            
        <div class="center">
            
            <div class="kanryo">削除完了しました</div>
            
            <form action="list.php">
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
        <title>アカウント削除完了画面</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
    </head>
    
<body>
    
<header>ナビゲーションバー</header>

<main>
    
        <div class="complete-container">
        
        
    
        <div class="left_1">
            
            <div class="page_name">アカウント削除完了画面</div>
            
        </div>

        <div class="right_1"></div>
            
        <div class="center">
            
            <div class="kanryo">削除完了しました</div>
            
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