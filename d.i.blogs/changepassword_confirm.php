<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>パスワード変更確認画面</title>
        <link rel = "stylesheet" type = "text/css" href = "regist.css">
    </head>
    
    <body>
        
        <header>ナビゲーションバー</header>
        <main>
            
            <div class="main_container">
                <div class="page_name">パスワード変更確認画面</div>
                
                <div class="kanryo">本当に更新してよろしいですか?</div>
                
                <div class="submit_box">
                    <div>
                        <input type="submit" class="submit" value="前に戻る" onclick="history.back();">
                    </div>


                    <form method="post" action="changepassword_complete.php">
                        <div class="ok">
                            <input type="submit" class="submit" value="変更する">
                            <input type="hidden" value="<?php echo $_POST['id'] ;?>" name="id">
                            <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                        </div>
                    </form>
                    
                </div>
                
            </div>
        </main>
        
        <footer>フッター</footer>
               
    </body>
</html>