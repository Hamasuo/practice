<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録画面</title>
        <link rel="stylesheet" type="text/css" href="diblog2.css">
    </head>
    
<body>
    
<header>
    <div class="logo">ナビゲーションバー</div>
</header>
    
<main>

        <form method="post" action="regist_confirm.php">

            <div>
            <label>名前（姓）</label>
                <input type="text" class="text" size="35" maxlength='10' name="family_name">
            </div>

            <div>
            <label>名前（名）</label>
                <input type="text" class="text" size="35" maxlength='10' name="last_name">
            </div>

            <div>
            <label>カナ（姓）</label>
                <input type="text" class="text" size="35" maxlength='10' name="family_name_kana">
            </div>

            <div>
            <label>カナ（名）</label>
                <input type="text" class="text" size="35" maxlength='10' name="last_name_kana">
            </div>

            <div>
            <label>メールアドレス</label>
                <input type="text" class="text" size="35" maxlength='100' name="mail">
            </div>

            <div>
            <label>パスワード</label>
                <input type="text" class="text" size="35" maxlength='10' name="password">
            </div>

            <div>
            <label>性別</label>
                <input type="radio" class="text" name="gender" value="0" checked="checked">男
                <input type="radio" class="text" name="gender" value="1">女
            </div>

            <div>
            <label>郵便番号</label>
                <input type="text" class="text" size="35" maxlength='7' name="postal_code">
            </div>

            <div>
            <label>住所（都道府県）</label>
            </div>

            <div>
            <label>住所（市区町村）</label>
                <input type="text" class="text" size="35" maxlength='10' name="postal_code">
            </div>

            <div>
            <label>住所（番地）</label>
                <input type="text" class="text" size="35" maxlength='100' name="postal_code">
            </div>

            <div>
            <label>アカウント権限</label><br>
            <label>アカウント権限</label>
            </div>

            <div>
                <input type="text" class="text" size="35" maxlength='100' name="postal_code"><br>
                <input type="text" class="text" size="35" maxlength='100' name="postal_code">
            </div>




        </form>
        
        
</main>

    
    
    
    
    
</body>

</html>



<?php
echo "Hello World"
?>
