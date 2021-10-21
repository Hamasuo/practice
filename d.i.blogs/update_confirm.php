<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント更新確認画面</title>
        <link rel = "stylesheet" type = "text/css" href = "regist.css">
    </head>
    
    <body>
        
        <header>ナビゲーションバー</header>
        <main>
            
            <div class="main_container">
                <div class="page_name">アカウント更新確認画面</div>
                
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

                <div class="submit_box">
                    <div>
                        <input type="submit" class="submit" value="前に戻る" onclick="history.back();">
                    </div>


                    <form method="post" action="update_complete.php">
                        <div class="ok">
                            <input type="submit" class="submit" value="更新する">
                            <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                            <input type="hidden" value="<?php echo $_POST['family_name']; ?>" name="family_name">
                            <input type="hidden" value="<?php echo $_POST['last_name']; ?>" name="last_name">
                            <input type="hidden" value="<?php echo $_POST['family_name_kana']; ?>" name="family_name_kana">
                            <input type="hidden" value="<?php echo $_POST['last_name_kana']; ?>" name="last_name_kana">
                            <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                            <input type="hidden" value="<?php echo $_POST['gender']; ?>" name="gender">
                            <input type="hidden" value="<?php echo $_POST['postal_code']; ?>" name="postal_code">
                            <input type="hidden" value="<?php echo $_POST['prefecture']; ?>" name="prefecture">
                            <input type="hidden" value="<?php echo $_POST['address_1']; ?>" name="address_1">
                            <input type="hidden" value="<?php echo $_POST['address_2']; ?>" name="address_2">
                            <input type="hidden" value="<?php echo $_POST['authority']; ?>" name="authority">
                            <input type="hidden" value="<?php echo $_POST['update_time']; ?>" name="update_time">
                        </div>
                    </form>
                    
                </div>
            </div>
        </main>
        
        <footer>フッター</footer>
               
    </body>
</html>



