<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録画面</title>
        <link rel = "stylesheet" type = "text/css" href = "regist.css">
    </head>
    
    <body>
        
        <header>ヘッダー</header>
        <main>
        
        
        
        <div class="page_name">アカウント登録画面</div>
            
            <div class="main_container">
        
                <table border="0" cellspacing="30">
                    
                    <tr>
                        <td>名前（姓）</td><td><input type="text" class="text" name="family_name"></td>
                    </tr>
                    <tr>
                        <td>名前（名）</td><td><input type="text" class="text" name="last_name"></td>
                    </tr>
                    <tr>
                        <td>カナ（姓）</td><td><input type="text" class="text" name=""></td>
                    </tr>
                    <tr>
                        <td>カナ（名）</td><td><input type="text" class="text" name=""></td>
                    </tr>
                    <tr>
                        <td>メールアドレス</td><td><input type="text" class="text" name=""></td>
                    </tr>
                    <tr>
                        <td>パスワード</td><td><input type="text" class="text" name=""></td>
                    </tr>
                    <tr>
                        <td>性別</td><td></td>
                    </tr>
                    <tr>
                        <td>郵便番号</td><td></td>
                    </tr>
                    <tr>
                        <td>住所（都道府県）</td><td></td>
                    </tr>
                    <tr>
                        <td>住所（市区町村）</td><td></td>
                    </tr>
                    <tr>
                        <td>住所（番地）</td><td></td>
                    </tr>
                    <tr>
                        <td>アカウント権限</td><td></td>
                    </tr>
                    
                    
   
<!--
名前（姓）　　　←UIはテキスボックス、最大入力文字数は10文字、初期値は空欄、カラム名「family_name」
名前（名）　　　←UIはテキスボックス、最大入力文字数は10文字、初期値は空欄、カラム名「last_name」
カナ（姓）　　　←UIはテキスボックス、最大入力文字数は10文字、初期値は空欄、カラム名「family_name_kana」
カナ（名）　　　←UIはテキスボックス、最大入力文字数は10文字、初期値は空欄、カラム名「last_name_kana」
メールアドレス　←UIはテキスボックス、最大入力文字数は100文字、初期値は空欄、カラム名「mail」
パスワード　　　←UIはテキスボックス、最大入力文字数は10文字、初期値は空欄、カラム名「password」
性別　　　　　　←UIはラジオボタン（男、女の２種類）、初期値は「男」、カラム名「gender」
郵便番号　　　　←UIはテキストボックス、最大入力文字数は７文字、初期値は空欄、カラム名「postal_code」
住所（都道府県）←UIはプルダウン（空欄、北海道～沖縄の４７都道府県の並び順）、初期値は空欄を選択済、カラム名「prefecture」
住所（市区町村）←UIはテキスボックス、最大入力文字数は10文字、初期値は空欄、カラム名「address_1」
住所（番地）　　←UIはテキスボックス、最大入力文字数は100文字、初期値は空欄、カラム名「address_2」
アカウント権限　←UIはプルダウン（一般、管理者の２種類）、初期値は「一般」を選択済、カラム名「authority」

確認する　　　　←UIはボタン形式、該当ボタン押下時に入力チェック（後述）をする
-->
                </table>
            
            </div>
        </main>
        
        <footer>フッター</footer>
               
    </body>
</html>



