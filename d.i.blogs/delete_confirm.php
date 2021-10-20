<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント削除確認画面</title>
        <link rel = "stylesheet" type = "text/css" href = "regist.css">
    </head>
    
    <body>
        
        <header>ナビゲーションバー</header>
        <main>
            
            <div class="main_container">
                <div class="page_name">アカウント削除確認画面</div>
                
                <div class="kanryo">本当に削除してよろしいですか?</div>
                
                <div class="submit_box">
                    <div>
                        <input type="submit" class="submit" value="前に戻る" onclick="history.back();">
                    </div>


                    <form method="post" action="delete_complete.php">
                        <div class="ok">
                            <input type="submit" class="submit" value="削除する">
                            <input type="hidden" value="<?php echo $_POST['id'];?>">
                            <input type="hidden" value="<?php echo $_POST['delete_flag'];?>">
                        </div>
                    </form>
                    
                </div>
                
            </div>
        </main>
        
        <footer>フッター</footer>
               
    </body>
</html>