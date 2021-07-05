<?php

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

$stmt=$pdo->query("select * from diworks_blog where id = ".$_POST['id']);

?>

<!doctype HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント更新画面</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
    </head>
    
<body>
    
<header>ナビゲーションバー</header>

<main>
    
    <div class="main-container">
        
        <form action="update_confirm.php" method="post">
    
        <div class="left">
            
            <div class="page_name">アカウント更新画面</div>
            
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
                ?>
                <div>
                    <p><input type="text" class="text" size="35" maxlength='10' name="family_name" value="<?=$row['family_name']?>"></p>
                    <p class="con_p"><input type="text" class="text" size="35" maxlength='10' name="last_name" value="<?=$row['last_name']?>"></p>
                    
                    <p class="con_p"><input type="text" class="text" size="35" maxlength='10' name="family_name_kana" value="<?=$row['family_name_kana']?>"></p>
                    <p class="con_p"><input type="text" class="text" size="35" maxlength='10' name="last_name_kana" value="<?=$row['last_name_kana']?>"></p>
                    <p class="con_p"><input type="text" class="text" size="35" maxlength='100' name="mail" value="<?=$row['mail']?>"></p>
                    <p class="con_p"><input type="text" class="text" size="35" maxlength='10' name="password" value="●●●●●●●"></p>
                    <p class="con_p">
                        <input type="radio" class="text" name="gender" value="0" 
                               <?php
                                    if ($row['gender'] == 0){
                                        echo "checked";
                                    }
                                ?>
                               >男
                        <input type="radio" class="text" name="gender" value="1" 
                               <?php
                                    if ($row['gender'] == 1){
                                        echo "checked";
                                    }
                                ?>
                               >女
                    </p>
                    <p class="con_p"><input type="text" class="text" size="10" maxlength='7' name="postal_code" value="<?=$row['postal_code']?>"></p>
                    <p class="con_p">
                        <?php
                        $prefe = array("","北海道","青森県","岩手県","宮城県","秋田県","山形県","福島県","茨城県","栃木県","群馬県","埼玉県","千葉県","東京都","神奈川県","新潟県","富山県","福井県","長野県","岐阜県","静岡県","愛知県","三重県","滋賀県","京都府","大阪府","兵庫県","奈良県","和歌山県","鳥取県","島根県","岡山県","広島県","山口県","徳島県","香川県","愛媛県","高知県","福岡県","佐賀県","長崎県","熊本県","大分県","宮崎県","鹿児島県","沖縄県");
                        ?>
                        <select class="dropdown" name="prefecture">
                            <?php
                                for ($i= 1;$i <count($prefe);$i++){
                                    if ($row['prefecture'] == $prefe[$i]){
                                    echo('<option value="'.$prefe[$i].'" selected>'.$prefe[$i].'</option>');
                                    }else{
                                        echo('<option value="'.$prefe[$i].'">'.$prefe[$i].'</option>');
                                    }
                                }
                            ?>
                        </select></p>
                    <p class="con_p"><input type="text" class="text" size="35" maxlength='10' name="address_1" value="<?=$row['address_1']?>"></p>
                    <p class="con_p"><input type="text" class="text" size="35" maxlength='10' name="address_2" value="<?=$row['address_2']?>"></p>
                    <p class="con_p">
                        <select class="dropdown" name="authority">
                            <option value="0"
                                    <?php
                                        if ($row['authority'] == 0){
                                            echo "selected";
                                        }
                                    ?>
                                    >一般</option>
                            <option value="1" 
                                    <?php
                                        if ($row['authority'] == 1){
                                            echo "selected";
                                        }
                                    ?>
                                    >管理者</option>
                        </select>
                    </p>
                </div>
                <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                <?php
                    }
                ?>
            </div>
                    
            </div>
        
            <div class="button_1">
                <input type="submit" class="submit button_test" name="update" value="確認する">
            </div>
            
        </form>
            
    </div>
    
            
    
</main>
    

<footer>
   フッター
</footer>
    
</body>

</html>