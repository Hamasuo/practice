<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録確認画面</title>
        <link rel = "stylesheet" type = "text/css" href = "regist.css">
    </head>
    
    <body>
        
        <header>ナビゲーションバー</header>
        <main>
            <div class="page_name">アカウント登録確認画面</div>
            
            <div class="main_container">
                
                <table border="0" cellspacing="30">
                    <tr>
                        <td>名前（姓）</td>
                        <td>
                            <?php echo $_POST['family_name']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>名前（名）</td>
                        <td><?php echo $_POST['last_name']; ?></td>
                    </tr>
                    <tr>
                        <td>カナ（姓）</td>
                        <td><?php echo $_POST['family_name_kana']; ?></td>
                    </tr>
                    <tr>
                        <td>カナ（名）</td>
                        <td><?php echo $_POST['last_name_kana']; ?></td>
                    </tr>
                    <tr>
                        <td>メールアドレス</td>
                        <td><?php echo $_POST['mail']; ?></td>
                    </tr>
                    <tr>
                        <td>パスワード</td>
                        <td>●●●●●●</td>
                    </tr>
                    <tr>
                        <td>性別</td>
                        <td>
                            <?php
                            if ($_POST['gender'] == 0){
                                echo "男";
                            }else{echo "女";}
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>郵便番号</td>
                        <td><?php echo $_POST['postal_code']; ?></td>
                    </tr>
                    <tr>
                        <td>住所（都道府県）</td>
                        <td><?php echo $_POST['prefecture']; ?></td>
                    </tr>
                    <tr>
                        <td>住所（市区町村）</td>
                        <td><?php echo $_POST['address_1']; ?></td>
                    </tr>
                    <tr>
                        <td>住所（番地）</td>
                        <td><?php echo $_POST['address_2']; ?></td>
                    </tr>
                    <tr>
                        <td>アカウント権限</td>
                        <td>
                            <?php
                            if ($_POST['authority'] == 0){
                                echo "一般";
                            }else{echo "管理者";}
                            ?>
                        </td>
                    </tr>
                </table>
<!--
作成
・入力制限
・入力エラー

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
-->
                    
                <div class="submit_box">
                    <div>
                        <input type="submit" class="submit" value="前に戻る" onclick="history.back();">
                    </div>


                    <form method="post" action="regist_complete.php">
                        <div class="ok">
                            <input type="submit" class="submit" value="登録する">
                            <!--入力データ受け渡しプログラム-->
                        </div>
                    </form>
                    
                </div>
            </div>
        </main>
        
        <footer>フッター</footer>
               
    </body>
</html>



