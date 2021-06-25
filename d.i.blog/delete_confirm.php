<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント削除確認画面</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
    </head>
    
<body>
    
<header>ナビゲーションバー</header>

<main>
    
        <div class="complete-container">
        
        
    
        <div class="left_1">
            
            <div class="page_name">アカウント削除確認画面</div>
            
        </div>

        <div class="right_1"></div>
            
        <div class="center">
            
            <div class="kanryo">
                <p>本当に削除してよろしいですか？</p>
            </div>

            <div id="okbu" class="confirm_button" method="post">
                <div class="button_1">
                    <input type="submit" class="submit buck" value="戻る" onclick="history.back();">
                </div>
                
                <div class="button_1" method="post">
                    <form action="delete_complete.php" method="post">
                        <input type="submit" class="submit button_1" value="削除する">
                        <input type="hidden" value="<?php echo $_POST['id']; ?>" name="id">
                        <input type="hidden" value="<?php echo $_POST['delete_flag']; ?>" name="family_name">
                    </form>
                </div>
            </div>
            
        </div>
            
    </div>
</main>
    

<footer>
   フッター
</footer>
    
</body>