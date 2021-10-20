<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
$stmt=$pdo->query("select * from diworks_blogs where id = ".$_POST['id']);
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント削除画面</title>
        <link rel = "stylesheet" type = "text/css" href = "regist.css">
    </head>
    
    <script src="regist.js" type="text/javascript"></script>
    <body>
        
        <header>ナビゲーションバー</header>
        <main>
                        
            <div class="main_container">
                <div class="page_name">アカウント削除画面</div>
                
                <table border="0" cellspacing="30">
                        <?php
                        while($row=$stmt->fetch()){
                        ?>
                        
                        <tr>
                            <td>名前（姓）</td>
                            <td><?php echo $row['family_name']; ?></td>
                        </tr>
                        <tr>
                            <td>名前（名）</td>
                            <td><?php echo $row['last_name']; ?></td>
                        </tr>
                        <tr>
                            <td>カナ（姓）</td>
                            <td><?php echo $row['family_name_kana']; ?></td>
                        </tr>
                        <tr>
                            <td>カナ（名）</td>
                            <td><?php echo $row['last_name_kana']; ?></td>
                        </tr>
                        <tr>
                            <td>メールアドレス</td>
                            <td><?php echo $row['mail']; ?></td>
                        </tr>
                        <tr>
                            <td>パスワード</td>
                            <td>●●●●●●</td>
                        </tr>
                        <tr>
                            <td>性別</td>
                            <td>
                                <?php
                                if ($row['gender'] == 0){
                                echo "男";}
                                else{echo "女";}
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>郵便番号</td>
                            <td><?php echo $row['postal_code'];?></td>
                        </tr>
                        <tr>
                            <td>住所（都道府県）</td>
                            <td><?php echo $row['prefecture'];?></td>
                        </tr>
                        <tr>
                            <td>住所（市区町村）</td>
                            <td><?php echo $row['address_1'];?></td>
                        </tr>
                        <tr>
                            <td>住所（番地）</td>
                            <td><?php echo $row['address_2'];?></td>
                        </tr>
                        <tr>
                            <td>アカウント権限</td>
                            <td>
                                <?php 
                                if($row['authority'] == 0){
                                echo "一般";}
                                else{echo "管理者";}
                                ?>
                            </td>
                        </tr>
                    
                        <?php
                        }
                        ?>
                    </table>
                    
                <form method="post" action="delete_confirm.php">
                    <div class="submit_box">
                        <input type="submit" class="submit" value="確認する">
                        <input type="hidden" value="<?php echo $_POST['id'];?>">
                        <input type="hidden" value="<?php echo $_POST['delete_flag'];?>">
                    </div>
                </form>
            </div>
        </main>
        
        <footer>フッター</footer>
               
    </body>
</html>



