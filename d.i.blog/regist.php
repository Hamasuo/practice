<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録画面</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>

    <script src="regist.js" type="text/javascript"></script>
<body>

    
<header>ナビゲーションバー</header>

<main>
    
    <div class="main-container">
        
        <form method="post" action="regist_confirm.php" name="regist_form" id="regist_form" onsubmit="return Check()">
    
        <div class="left">
            
            <div class="page_name">アカウント登録画面</div>
            
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
                
                <p><input type="text" class="text" size="35" maxlength='10' name="family_name"></p>
                    <div class="a">a</div>
                    <div class="check_error" id="family_name_error"></div>
                <p><input type="text" class="text" size="35" maxlength='10' name="last_name"></p>
                    <div class="a">a</div>
                    <div class="check_error" id="last_name_error"></div>
                <p><input type="text" class="text" size="35" maxlength='10' name="family_name_kana"></p>
                    <div class="a">a</div>
                    <div class="check_error" id="family_name_kana_error"></div>
                <p><input type="text" class="text" size="35" maxlength='10' name="last_name_kana"></p>
                    <div class="a">a</div>
                    <div class="check_error" id="last_name_kana_error"></div>
                <p><input type="text" class="text" size="35" maxlength='100' name="mail"></p>
                    <div class="a">a</div>
                    <div class="check_error" id="mail_error"></div>
                <p><input type="text" class="text" size="35" maxlength='10' name="password"></p>
                    <div class="a">a</div>
                    <div class="check_error" id="password_error"></div>
                <p><input type="radio" class="text" name="gender" value="0" checked="checked">男
                <input type="radio" class="text" name="gender" value="1">女</p>
                    <div class="a">a</div>
                <p><input type="text" class="text" size="10" maxlength='7' name="postal_code"></p>
                    <div class="a">a</div>
                    <div class="check_error" id="postal_code_error"></div>
                <p>
                    <?php
                        $prefe = array("","北海道","青森県","岩手県","宮城県","秋田県","山形県","福島県","茨城県","栃木県","群馬県","埼玉県","千葉県","東京都","神奈川県","新潟県","富山県","福井県","長野県","岐阜県","静岡県","愛知県","三重県","滋賀県","京都府","大阪府","兵庫県","奈良県","和歌山県","鳥取県","島根県","岡山県","広島県","山口県","徳島県","香川県","愛媛県","高知県","福岡県","佐賀県","長崎県","熊本県","大分県","宮崎県","鹿児島県","沖縄県");
                    ?>
                    <select class="dropdown" name="prefecture">
                    <?php
                        for ($i= 0;$i <count($prefe);$i++){
                            echo('<option value="'.$prefe[$i].'">'.$prefe[$i].'</option>');
                        }
                    ?>
                </select></p>
                    <div class="a">a</div>
                    <div class="check_error" id="prefecture_error"></div>
                <p><input type="text" class="text" size="35" maxlength='10' name="address_1"></p>
                    <div class="a">a</div>
                    <div class="check_error" id="address_1_error"></div>
                <p><input type="text" class="text" size="35" maxlength='100' name="address_2"></p>
                    <div class="a">a</div>
                    <div class="check_error" id="address_2_error"></div>
                <p><select class="dropdown" name="authority">
                    <option value="0" selected>一般</option>
                    <option value="1">管理者</option>
                </select></p>
                

            </div>
               
        </div>
             <input type="submit" id="submit" class="submit" value="確認する">

        </form>
    </div>
    
    
</main>
    

<footer>
   フッター
</footer>
    
</body>

</html>