<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
$stmt=$pdo->query("select * from diworks_blogs where id = ".$_POST['id']);
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント更新画面</title>
        <link rel = "stylesheet" type = "text/css" href = "regist.css">
    </head>
    
    <script src="update.js" type="text/javascript"></script>
    <body>
        
        <header>ナビゲーションバー</header>
        <main>
                        
            <div class="main_container">
                <div class="page_name">アカウント更新画面</div>
                
                <form method="post" action="update_confirm.php" name="regist_form" onsubmit="return Check()">
                    <table border="0" cellspacing="30">
                        <?php
                        while($row=$stmt->fetch()){
                        ?>
                        
                        <tr>
                            <td>名前（姓）</td>
                            <td>
                                <input type="text" class="text" maxlength='10' name="family_name" value="<?=$row['family_name']?>">
                                <div class="check_error" id="family_name_error"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>名前（名）</td>
                            <td>
                                <input type="text" class="text" maxlength='10' name="last_name" value="<?=$row['last_name']?>">
                                <div class="check_error" id="last_name_error"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>カナ（姓）</td>
                            <td>
                                <input type="text" class="text" maxlength='10' name="family_name_kana" value="<?=$row['family_name_kana']?>">
                                <div class="check_error" id="family_name_kana_error"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>カナ（名）</td>
                            <td>
                                <input type="text" class="text" maxlength='10' name="last_name_kana" value="<?=$row['last_name_kana']?>">
                                <div class="check_error" id="last_name_kana_error"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>メールアドレス</td>
                            <td>
                                <input type="text" class="text" maxlength='100' name="mail" value="<?=$row['mail']?>">
                                <div class="check_error" id="mail_error"></div>
                            </td>
                        </tr>
                        <!--パスワード変更画面-->
                        <tr>
                            <td>パスワード</td>
                            <td>
                                <form method="post" action="changepassword.php">
                                    <input type="submit" formaction="changepassword.php" value="パスワード変更はこちら">
                                    <input type="hidden" value="<?php echo $_POST['id']; ?>" name="id">
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>性別</td>
                            <td>
                                <input type="radio" name="gender" value="0"
                                       <?php
                                        if ($row['gender'] == 0){
                                            echo "checked";
                                        }
                                        ?>
                                       >男
                                <input type="radio" name="gender" value="1"
                                       <?php
                                        if ($row['gender'] == 1){
                                            echo "checked";
                                        }
                                        ?>
                                       >女
                            </td>
                        </tr>
                        <tr>
                            <td>郵便番号</td>
                            <td>
                                <input type="text" class="textmin" maxlength='7' name="postal_code" value="<?=$row['postal_code']?>">
                                <div class="check_error" id="postal_code_error"></div>
                            </td>
                        </tr>
                        <!--都道府県-->
                        <tr>
                            <td>住所（都道府県）</td>
                            <?php
                            $prefe = array("","北海道","青森県","岩手県","宮城県","秋田県","山形県","福島県","茨城県","栃木県","群馬県","埼玉県","千葉県","東京都","神奈川県","新潟県","富山県","福井県","長野県","岐阜県","静岡県","愛知県","三重県","滋賀県","京都府","大阪府","兵庫県","奈良県","和歌山県","鳥取県","島根県","岡山県","広島県","山口県","徳島県","香川県","愛媛県","高知県","福岡県","佐賀県","長崎県","熊本県","大分県","宮崎県","鹿児島県","沖縄県");
                            ?>
                            <td>
                                <select name="prefecture" class="textpull">
                                <?php
                                for ($i = 1;$i <count($prefe);$i++){
                                    if ($row['prefecture'] == $prefe[$i]){
                                    echo('<option value="'.$prefe[$i].'" selected>'.$prefe[$i].'</option>');
                                    }else{
                                        echo('<option value="'.$prefe[$i].'">'.$prefe[$i].'</option>');
                                    }
                                }
                                ?>
                                </select>
                                <div class="check_error" id="prefecture_error"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>住所（市区町村）</td>
                            <td>
                                <input type="text" class="text" maxlength='10' name="address_1" value="<?=$row['address_1']?>">
                                <div class="check_error" id="address_1_error"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>住所（番地）</td>
                            <td>
                                <input type="text" class="text" maxlength='100' name="address_2" value="<?=$row['address_2']?>">
                                <div class="check_error" id="address_2_error"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>アカウント権限</td>
                            <td>
                                <select name="authority" class="textpull">
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
                            </td>
                        </tr>
                        
                        <?php
                        }
                        ?>
                    </table>
                    
                    <div class="submit_box">
                        <input type="submit" class="submit" value="確認する">
                        <input type="hidden" value="<?php echo $_POST['id']; ?>" name="id">
                    </div>
                </form>
            </div>
        </main>
        
        <footer>フッター</footer>
               
    </body>
</html>



