<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
$stmt=$pdo->query("select * from diworks_blogs where mail = ".$_POST['mail']);
//$stmt=$pdo->prepare("select * from diworks_blogs where mail = ".$_POST['mail']);

var_dump($stmt);
var_dump($_POST['mail']);

/*

if(isset($_POST['mail'])) {
if($rows = $stmt->fetch()) {
if($rows['authority'] == 1) {
    echo "管理者";
} else {
    echo "管理者じゃない";
}
}
}

*/
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>テスト</title>
        <link rel = "stylesheet" type = "text/css" href = "regist.css">
    </head>
    
    <script src="update.js" type="text/javascript"></script>
    <body>
        
        
               
    </body>
</html>

