<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
$conditions = '';

session_start();
//管理者権限の確認
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

//検索条件
if(count($_POST)>0){
    if($_POST['family_names'] != ""){
        $conditions .= "and family_name LIKE '%".$_POST['family_names']."%'";
    }
    if($_POST['last_names'] != ""){
        $conditions .= "and last_name LIKE '%".$_POST['last_names']."%'";
    }
    if($_POST['family_name_kanas'] != ""){
        $conditions .= "and family_name_kana LIKE '%".$_POST['family_name_kanas']."%'";
    }
    if($_POST['last_name_kanas'] != ""){
        $conditions .= "and last_name_kana LIKE '%".$_POST['last_name_kanas']."%'";
    }
    if($_POST['mails'] != ""){
        $conditions .= "and mail LIKE '%".$_POST['mails']."%'";
    }
    if($_POST['genders'] == "0" or $_POST['genders'] == "1"){
        $conditions .= "and gender LIKE '%".$_POST['genders']."%'";
    }
    if($_POST['authoritys'] == "0" or $_POST['authoritys'] == "1"){
        $conditions .= "and authority LIKE '%".$_POST['authoritys']."%'";
    }
}
$stmt=$pdo->query("select * from diworks_blogs where id >= 0 ".$conditions." ORDER BY id DESC");

//検索条件の記憶
if (!empty($_POST)) {
    $_SESSION['family_names'] = $_POST['family_names'];
    $_SESSION['last_names'] = $_POST['last_names'];
    $_SESSION['family_name_kanas'] = $_POST['family_name_kanas'];
    $_SESSION['last_name_kanas'] = $_POST['last_name_kanas'];
    $_SESSION['mails'] = $_POST['mails'];
    $_SESSION['genders'] = $_POST['genders'];
    $_SESSION['authoritys'] = $_POST['authoritys'];
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
                
                <!--検索-->
                <form action="list.php" method="post">
                    <table width="100%" bgcolor="black" cellspacing="1px" name="list_table">
                        <tr bgcolor="white">
                            <td>名前(姓)</td><td><input type="text" class="search" name="family_names" value="<?=$_SESSION['family_names']?>"></td>
                            <td>名前(名)</td><td><input type="text" class="search" name="last_names" value="<?=$_SESSION['last_names']?>"></td>
                        </tr>
                        <tr bgcolor="white">
                            <td>カナ(性)</td><td><input type="text" class="search" name="family_name_kanas" value="<?=$_SESSION['family_name_kanas']?>"></td>
                            <td>カナ(名)</td><td><input type="text" class="search" name="last_name_kanas" value="<?=$_SESSION['last_name_kanas']?>"></td>
                        </tr>
                        <tr bgcolor="white">
                            <td>メールアドレス</td><td><input type="text" class="search" name="mails" value="<?=$_SESSION['mails']?>"></td>
                            <td>性別</td>
                            <td>
                                <div class="search_item">
                                    <input type="radio" name="genders" value="0"
                                           <?php
                                            if ($_SESSION['genders'] == 0){
                                                echo "checked";
                                            }
                                            ?>
                                           >男
                                    <input type="radio" name="genders" value="1"
                                           <?php
                                            if ($_SESSION['genders'] == 1){
                                                echo "checked";
                                            }
                                            ?>
                                           >女
                                    <input type="radio" name="genders" value="2"
                                           <?php
                                            if ($_SESSION['genders'] == 2){
                                                echo "checked";
                                            }
                                            ?>
                                           >指定なし
                                </div>
                            </td>
                        </tr>
                        <tr bgcolor="white">
                            <td>アカウント権限</td>
                            <td>
                                <select name="authoritys" class="search">
                                    <option value="2"
                                            <?php
                                            if ($_SESSION['authoritys'] == 2){
                                                echo "selected";
                                            }
                                            ?>
                                            >指定なし</option>
                                    <option value="0"
                                            <?php
                                            if ($_SESSION['authoritys'] == 0){
                                                echo "selected";
                                            }
                                            ?>
                                            >一般</option>
                                    <option value="1"
                                            <?php
                                            if ($_SESSION['authoritys'] == 1){
                                                echo "selected";
                                            }
                                            ?>
                                            >管理者</option>
                                </select>
                            </td>
                            <td colspan="2"></td>
                        </tr>
                    </table>
                    
                    <div class="searbotton">
                        <input type="submit" class="search color" value="検索">
                    </div>
                </form>

                <!--リスト一覧-->
                <?php
                if(empty($_POST)){
                    ;
                } else {
                ?>
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
                <?php
                }
                ?>
                
            </div>
        </main>
        
        <footer class="list">フッター</footer>
    </body>
</html>