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

    
<header>
    <div class="logo">ナビゲーションバー</div>
</header>

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
                <div class="check_error" id="family_name_error"></div>
                <p><input type="text" class="text" size="35" maxlength='10' name="last_name"></p>
                <div class="check_error" id="last_name_error"></div>
                <p><input type="text" class="text" size="35" maxlength='10' name="family_name_kana"></p>
                <div class="check_error" id="family_name_kana_error"></div>
                

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