<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録画面</title>
        <link rel = "stylesheet" type = "text/css" href = "regist.css">
    </head>
    
    <body>
        
        <header>ナビゲーションバー</header>
        <main>
            <div class="page_name">アカウント登録画面</div>
            
            <div class="main_container">
                
                <form method="post" action="regist_confirm.php">
                    <table border="0" cellspacing="30">
                        <tr>
                            <td>名前（姓）</td>
                            <td><input type="text" class="text" name="family_name"></td>
                        </tr>
                        <tr>
                            <td>名前（名）</td>
                            <td><input type="text" class="text" name="last_name"></td>
                        </tr>
                        <tr>
                            <td>カナ（姓）</td>
                            <td><input type="text" class="text" name="family_name_kana"></td>
                        </tr>
                        <tr>
                            <td>カナ（名）</td>
                            <td><input type="text" class="text" name="last_name_kana"></td>
                        </tr>
                        <tr>
                            <td>メールアドレス</td>
                            <td><input type="text" class="text" name="mail"></td>
                        </tr>
                        <tr>
                            <td>パスワード</td>
                            <td><input type="text" class="text" name="password"></td>
                        </tr>
                        <tr>
                            <td>性別</td>
                            <td>
                                <input type="radio" name="gender" value="0" checked="checked">男
                                <input type="radio" name="gender" value="1">女
                            </td>
                        </tr>
                        <tr>
                            <td>郵便番号</td>
                            <td><input type="text" class="textmin" name="postal_code"></td>
                        </tr>
                        <!--都道府県-->
                        <tr>
                            <td>住所（都道府県）</td>
                            <?php
                            $prefe = array("","北海道","青森県","岩手県","宮城県","秋田県","山形県","福島県","茨城県","栃木県","群馬県","埼玉県","千葉県","東京都","神奈川県","新潟県","富山県","福井県","長野県","岐阜県","静岡県","愛知県","三重県","滋賀県","京都府","大阪府","兵庫県","奈良県","和歌山県","鳥取県","島根県","岡山県","広島県","山口県","徳島県","香川県","愛媛県","高知県","福岡県","佐賀県","長崎県","熊本県","大分県","宮崎県","鹿児島県","沖縄県");
                            ?>
                            <td>
                                <select name="prefecture" class="textpull">
                                    <?php
                                    for ($i= 0;$i <count($prefe);$i++){
                                        echo('<option value="'.$prefe[$i].'">'.$prefe[$i].'</option>');
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>住所（市区町村）</td>
                            <td><input type="text" class="text" name="address_1"></td>
                        </tr>
                        <tr>
                            <td>住所（番地）</td>
                            <td><input type="text" class="text" name="address_2"></td>
                        </tr>
                        <tr>
                            <td>アカウント権限</td>
                            <td>
                                <select name="authority" class="textpull">
                                    <option value="0" checked="checked">一般</option>
                                    <option value="1">管理者</option>
                                </select>
                            </td>
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
                    
                    <div class="submit_box">
                        <input type="submit" class="submit" value="確認する">
                    </div>
                </form>
            </div>
        </main>
        
        <footer>フッター</footer>
               
    </body>
</html>



