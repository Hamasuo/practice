<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録画面</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
    </head>

    
<body>
    
<header>
    <div class="logo">ナビゲーションバー</div>
</header>

<main>
    
    <div class="main-container">
        
        <form method="post" action="regist_confirm.php" name="regist">
    
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
                <p><input type="text" class="text" size="35" maxlength='10' name="family_name" pattern="[^\x20-\x7E]*"></p>
                <p><input type="text" class="text" size="35" maxlength='10' name="last_name" required pattern="[^\x20-\x7E]*"></p>
                <p><input type="text" class="text" size="35" maxlength='10' name="family_name_kana" required pattern="[\u30A1-\u30F6]*"></p>
                <p><input type="text" class="text" size="35" maxlength='10' name="last_name_kana" required pattern="[\u30A1-\u30F6]*"></p>
                <p><input type="email" class="text" size="35" maxlength='100' name="mail" required></p>
                <p><input type="text" class="text" size="35" maxlength='10' name="password" required pattern="^[0-9A-Za-z]+$"></p>
                <p><input type="radio" class="text" name="gender" value="0" checked="checked" required>男
                <input type="radio" class="text" name="gender" value="1">女</p>
                <p><input type="number" class="text" size="10" maxlength='7' name="postal_code" required></p>
                <p><select class="dropdown" name="prefecture" required>
                    <option value="">　</option>
                    <option value="北海道">北海道</option>
                    <option value="青森県">青森県</option>
                    <option value="岩手県">岩手県</option>
                    <option value="宮城県">宮城県</option>
                    <option value="秋田県">秋田県</option>
                    <option value="山形県">山形県</option>
                    <option value="福島県">福島県</option>
                    <option value="茨城県">茨城県</option>
                    <option value="栃木県">栃木県</option>
                    <option value="群馬県">群馬県</option>
                    <option value="埼玉県">埼玉県</option>
                    <option value="千葉県">千葉県</option>
                    <option value="東京都">東京都</option>
                    <option value="神奈川県">神奈川県</option>
                    <option value="新潟県">新潟県</option>
                    <option value="富山県">富山県</option>
                    <option value="石川県">石川県</option>
                    <option value="福井県">福井県</option>
                    <option value="山梨県">山梨県</option>
                    <option value="長野県">長野県</option>
                    <option value="岐阜県">岐阜県</option>
                    <option value="静岡県">静岡県</option>
                    <option value="愛知県">愛知県</option>
                    <option value="三重県">三重県</option>
                    <option value="滋賀県">滋賀県</option>
                    <option value="京都府">京都府</option>
                    <option value="大阪府">大阪府</option>
                    <option value="兵庫県">兵庫県</option>
                    <option value="奈良県">奈良県</option>
                    <option value="和歌山県">和歌山県</option>
                    <option value="鳥取県">鳥取県</option>
                    <option value="島根県">島根県</option>
                    <option value="岡山県">岡山県</option>
                    <option value="広島県">広島県</option>
                    <option value="山口県">山口県</option>
                    <option value="徳島県">徳島県</option>
                    <option value="香川県">香川県</option>
                    <option value="愛媛県">愛媛県</option>
                    <option value="高知県">高知県</option>
                    <option value="福岡県">福岡県</option>
                    <option value="佐賀県">佐賀県</option>
                    <option value="長崎県">長崎県</option>
                    <option value="熊本県">熊本県</option>
                    <option value="大分県">大分県</option>
                    <option value="宮崎県">宮崎県</option>
                    <option value="鹿児島県">鹿児島県</option>
                    <option value="沖縄県">沖縄県</option>
                </select></p>
                <p><input type="text" class="text" size="35" maxlength='10' name="address_1" required pattern="[-\u4E00-\u9FFF\u3040-\u309Fー\uFF66-\uFF9F\u30A1-\u30F60-9０-９_\s]*"></p>
                <p><input type="text" class="text" size="35" maxlength='100' name="address_2" required pattern="[-\u4E00-\u9FFF\u3040-\u309Fー\uFF66-\uFF9F\u30A1-\u30F60-9０-９_\s]*"></p>
                <p><select class="dropdown" name="authority" required>
                    <option value="0">一般</option>
                    <option value="1">管理者</option>
                </select></p>


            </div>
               
        </div>
             <input type="submit" class="submit" value="確認する" onclick="return check()">

        </form>
    </div>
    
    
</main>
    

<footer>
   フッター
</footer>
    
</body>

</html>