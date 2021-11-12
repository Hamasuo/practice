<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
$stmt=$pdo->query("select * from diworks_blogs ORDER BY id DESC;");

session_start();
if (empty($_SESSION['authority'])) {//SESSION情報がない場合
    print('
    <!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="UTF-8">
            <title>アカウント一覧</title>
            <link rel = "stylesheet" type = "text/css" href = "regist.css">
        </head>

        <body>

            <header>ナビゲーションバー</header>
            <main>
                
                <div class="main_container">
                    <div class="page_name">アカウント一覧</div>

                    <div class="kanryo">管理者のみ操作できるページです。</div>

                    <div class="submit_box">
                        <form action="d.i.blog.php">
                            <input type="submit" class="submit" value="TOPページへ戻る">
                        </form>
                    </div>

                </div>
            </main>

            <footer>フッター</footer>

        </body>
    </html>
    ');
    die();
} else if($_SESSION['authority'] == 0) {//権限が一般であるとき
    print('
    <!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="UTF-8">
            <title>アカウント一覧</title>
            <link rel = "stylesheet" type = "text/css" href = "regist.css">
        </head>

        <body>

            <header>ナビゲーションバー</header>
            <main>
                
                <div class="main_container">
                    <div class="page_name">アカウント一覧</div>

                    <div class="kanryo">管理者のみ操作できるページです。</div>

                    <div class="submit_box">
                        <form action="d.i.blog.php">
                            <input type="submit" class="submit" value="TOPページへ戻る">
                        </form>
                    </div>

                </div>
            </main>

            <footer>フッター</footer>

        </body>
    </html>
    ');
    die();
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント一覧</title>
        <link rel = "stylesheet" type="text/css" href="regist.css">
    </head>
    
    <body>
        <header class="list">ナビゲーションバー</header>
        
        <main class="list">
            <div class="list_container">
                <div class="page_name">アカウント一覧</div>
                
                <form action="" method="post">
                    <table width="100%" bgcolor="black" cellspacing="1px" name="list_table">
                        <tr bgcolor="white">
                            <td>名前(姓)</td><td><input type="text" class="search" name=""></td>
                            <td>名前(名)</td><td><input type="text" class="search" name=""></td>
                        </tr>
                        <tr bgcolor="white">
                            <td>カナ(姓)</td><td><input type="text" class="search" name=""></td>
                            <td>カナ(名)</td><td><input type="text" class="search" name=""></td>
                        </tr>
                        <tr bgcolor="white">
                            <td>メールアドレス</td><td><input type="text" class="search" name=""></td>
                            <td>性別</td>
                            <td>
                                <div class="aaa">
                                    <input type="radio" name="gender" value="0" checked="checked">男
                                    <input type="radio" name="gender" value="1">女
                                </div>
                            </td>
                        </tr>
                        <tr bgcolor="white">
                            <td>アカウント権限</td>
                            <td>
                                <select name="authority" class="search aaa">
                                    <option value="0" checked="checked">一般</option>
                                    <option value="1">管理者</option>
                                </select>
                            </td>
                            <td colspan="2"></td>
                        </tr>
                    </table>
                
                
                    <div class="searbotton">
                        <input type="submit" class="search color" value="検索">
                    </div>
                </form>

                <table width="100%" bgcolor="black" cellspacing="1px" name="list_table">
                    <tr bgcolor="white">
                        <th>ID</th><th>名前（姓）</th><th>名前（名）</th><th>カナ(姓)</th><th>カナ(名)</th><th>メールアドレス</th><th>性別</th><th>アカウント権限</th><th>削除フラグ</th><th>登録日時</th><th>更新日時</th><th colspan="2">操作</th>
                    </tr>
                        <?php
                        while($row=$stmt->fetch()){
                        ?>
                        <tr bgcolor="white">
                            <td>
                                <?php echo $row['id']; ?>
                            </td>
                            <td><?php echo $row['family_name']; ?></td>
                            <td><?php echo $row['last_name']; ?></td>
                            <td><?php echo $row['family_name_kana']; ?></td>
                            <td><?php echo $row['last_name_kana']; ?></td>
                            <td><?php echo $row['mail']; ?></td>
                            <td>
                                <?php
                                    if ($row['gender'] == 0){
                                        echo "男";}
                                    else{echo "女";}
                                ?>
                            </td>
                            <td>
                                <?php 
                                    if($row['authority'] == 0){
                                        echo "一般";}
                                    else{echo "管理者";}
                                ?>
                            </td>
                            <td>
                                <?php
                                    if ($row['delete_flag'] == 0){
                                        echo "有効";}
                                    else{echo "無効";}
                                ?>
                            </td>
                            <td><?php echo date('Y/m/d', strtotime($row['registered_time'])); ?></td>
                            <td><?php echo date('Y/m/d', strtotime($row['update_time'])); ?></td>
                            <td>
                                <?php
                                echo "<form action='update.php' method='post'>",
                                "<input type='submit' class='search color' value='更新'>",
                                "<input type='hidden' name='id' value='".$row['id']."'>",
                                "</form>";
                                ?>
                            <td>
                                <form action="delete.php" method="post">
                                <input type="submit" class="search color" value="削除">
                                <input type="hidden" name="id" value="<?=$row['id']?>">
                                </form>

                        </tr>
                        <?php
                        }
                        ?>
                </table>
            </div>
        </main>
        
        <footer class="list">フッター</footer>
    </body>
</html>