<!--応用ができる可能性があるため、テストにて対応できるか確認-->

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ログイン画面</title>
        <link rel = "stylesheet" type = "text/css" href = "regist.css">
    </head>
    
    <body>
        <h1>ログインページ</h1>
        <form action="test.php" method="post">
            <div>
            <label>メールアドレス：</label>
            <input type="text" name="mail" required>
            </div>
        <div>
            <label>パスワード：</label>
            <input type="password" name="password" required>
        </div>
        <input type="submit" value="ログイン">
        </form>
    </body>
</html>
