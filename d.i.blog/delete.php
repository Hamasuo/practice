<?php

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

$stmt=$pdo->query("select * from diworks_blog where id = ".$_POST['id']);

?>

<!doctype HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント削除画面</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
    </head>
    
<body>
    
<header>ナビゲーションバー</header>

<main>
    
    <div class="main-container">
        
        
    
        <div class="left">
            
            <div class="page_name">アカウント登録確認画面</div>
            
            <div class="account_item">
                <p><label>名前（姓）</label></p>
                <p><label>名前（名）</label></p>
                <p><label>カナ（姓）</label></p>
                <p><label>カナ（名）</label></p>
                <p><label>メールアドレス</label></p>
                <p><label>パスワード</label></p>
                <p><label>性別</label></p>
                <p><label>郵便番号</label></p>
                <p><label>住所（都道府県）</label></p>
                <p><label>住所（市区町村）</label></p>
                <p><label>住所（番地）</label></p>
                <p><label>アカウント権限</label></p>
            </div>
        
        </div>

        <div class="right">
        
            
            <div>
                <?php
                    while($row=$stmt->fetch()){
                        //if($row['id']!=$_POST['id']) continue;
                    ?>
                <div class="confirm">
                    <p><?php echo $row['family_name']; ?></p>
                    <p class="con_p"><?php echo $row['last_name']; ?></p>
                    <p class="con_p"><?php echo $row['family_name_kana']; ?></p>
                    <p class="con_p"><?php echo $row['last_name_kana']; ?></p>
                    <p class="con_p"><?php echo $row['mail']; ?></p>
                    <p class="con_p">●●●●●●●</p>
                    <p class="con_p">
                        <?php
                            if ($row['gender'] == 0){
                                echo "男";}
                            else{echo "女";}
                        ?>
                    </p>
                    <p class="con_p"><?php echo $row['postal_code'];?></p>
                    <p class="con_p"><?php echo $row['prefecture'];?></p>
                    <p class="con_p"><?php echo $row['address_1'];?></p>
                    <p class="con_p"><?php echo $row['address_2'];?></p>
                    <p class="con_p">
                        <?php 
                            if($row['authority'] == 0){
                                echo "一般";}
                            else{echo "管理者";}
                        ?>
                        <?php
                        }
                        ?>
                    </p>
                </div>
            </div>
                    
        </div>
        
        <div class="button_1" method="post">
            <form action="delete_confirm.php" method="post">
                <input type="submit" class="submit button_test" name="delete" value="確認する">
            </form>
        </div>
            
    </div>
    
            
    
</main>
    

<footer>
   フッター
</footer>
    
</body>

</html>