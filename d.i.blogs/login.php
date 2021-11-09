<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ログイン画面</title>
        <link rel = "stylesheet" type = "text/css" href = "regist.css">
    </head>
    
    <script src="login.js" type="text/javascript"></script>
    <body>
        
        <header>ナビゲーションバー</header>
        <main>
                        
            <div class="login_container">
                <div class="page_name">ログイン画面</div>
                
                <form method="post" action="login_complete.php" name="login_form" onsubmit="return Check()">
                
                    <table class="login_form" border="0" cellspacing="30">

                        <tr>
                            <td>メールアドレス</td>
                            <td>
                                <input type="text" class="text" maxlength='100' name="mail">
                                <div class="check_error" id="mail_error"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>パスワード</td>
                            <td>
                                <input type="text" class="text" maxlength='10' name="password">
                                <div class="check_error" id="password_error"></div>
                            </td>
                        </tr>

                    </table>

                    <div class="submit_box">
                        <input type="submit" class="submit" value="ログイン">
                    </div>
                    
                </form>
                
            </div>
        </main>
        
        <footer>フッター</footer>
               
    </body>
</html>



