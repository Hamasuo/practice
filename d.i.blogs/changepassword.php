<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>パスワード変更画面</title>
        <link rel = "stylesheet" type = "text/css" href = "regist.css">
    </head>
    
    <script src="regist.js" type="text/javascript"></script>
    <body>
        
        <header>ナビゲーションバー</header>
        <main>
                        
            <div class="main_container">
                <div class="page_name">パスワード変更画面</div>
                
                <table border="0" cellspacing="30">
 
                    <tr>
                        <td>パスワード</td>
                        <td>
                            <input type="text" class="text" maxlength='10' name="password">
                            <div class="check_error" id="password_error"></div>
                        </td>
                    </tr>

                </table>
                    
                <div class="submit_box">
                    <div>
                        <input type="submit" class="submit" value="前に戻る" onclick="history.back();">
                    </div>

                    <form method="post" action="changepassword_confirm.php">
                        <div class="ok">
                            <input type="submit" class="submit" value="更新する">
                            <input type="hidden" value="<?php echo $_POST['id']; ?>" name="id">
                            <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                        </div>
                    </form>
                    
                </div>
            </div>
        </main>
        
        <footer>フッター</footer>
               
    </body>
</html>



