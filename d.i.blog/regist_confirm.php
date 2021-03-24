<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録確認画面</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
    </head>
    
<body>
    
<header>
    <div class="logo">ナビゲーションバー</div>
</header>

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
                <div class="confirm">
                    <p><?php echo $_POST['family_name'];?></p>
                    <p><?php echo $_POST['last_name'];?></p>
                    <p><?php echo $_POST['family_name_kana'];?></p>
                    <p><?php echo $_POST['last_name_kana'];?></p>
                    <p><?php echo $_POST['mail'];?></p>
                    <p>●●●●●●●</p>
                    <p><?php echo $_POST['gender'];?></p>
                    <p><?php echo $_POST['postal_code'];?></p>
                    <p><?php echo $_POST['prefecture'];?></p>
                    <p><?php echo $_POST['address_1'];?></p>
                    <p><?php echo $_POST['address_2'];?></p>
                    <p><?php echo $_POST['authority'];?></p>
                </div>
            </div>
                    
        </div>
            <div class="confirm_button" method="post">
                <div class="button_1">
                    <input type="submit" class="submit buck" value="前に戻る" onclick="history.back();">
                </div>
                
                <div class="button_1" method="post">
                    <form action="regist_complete.php" method="post">
                        <input type="submit" class="submit button_1" value="登録する">
                        <input type="hidden" value="<?php echo $_POST['id']; ?>" name="id">
                        <input type="hidden" value="<?php echo $_POST['family_name']; ?>" name="family_name">
                        <input type="hidden" value="<?php echo $_POST['last_name']; ?>" name="last_name">
                        <input type="hidden" value="<?php echo $_POST['family_name_kana']; ?>" name="family_name_kana">
                        <input type="hidden" value="<?php echo $_POST['last_name_kana']; ?>" name="last_name_kana">
                        <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                        <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                        <input type="hidden" value="<?php echo $_POST['gender']; ?>" name="gender">
                        <input type="hidden" value="<?php echo $_POST['postal_code']; ?>" name="postal_code">
                        <input type="hidden" value="<?php echo $_POST['prefecture']; ?>" name="prefecture">
                        <input type="hidden" value="<?php echo $_POST['address_1']; ?>" name="address_1">
                        <input type="hidden" value="<?php echo $_POST['address_2']; ?>" name="address_2">
                        <input type="hidden" value="<?php echo $_POST['authority']; ?>" name="authority">
                        <input type="hidden" value="<?php echo $_POST['delete_flag']; ?>" name="delete_flag">
                        <input type="hidden" value="<?php echo $_POST['registered_time']; ?>" name="registered_time">
                        <input type="hidden" value="<?php echo $_POST['update_time']; ?>" name="update_time">

                    </form>
                </div>
            </div>
            
    </div>
    
            
    
</main>
    

<footer>
   フッター
</footer>
    
</body>

</html>