<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
//$stmt=$pdo->query("select * from diworks_blogs ORDER BY id DESC;");

/*
if($_POST['idd'] != "" or $_POST['sei'] != "" or $_POST['mei'] != "" or $_POST['kana'] != ""){ //IDおよびユーザー名の入力有無を確認
$stmt = $pdo->query("select * from diworks_blogs where (id = '".$_POST['idd']."' or family_name LIKE '%".$_POST['sei']."%' or last_name LIKE '%".$_POST['mei']."%' or family_name_kana LIKE '%".$_POST['kana']."%')"); //SQL文を実行して、結果を$stmtに代入する。
}

名前（姓）　　　←UIはテキスボックス、初期値は空欄
名前（名）　　　←UIはテキスボックス、初期値は空欄
カナ（姓）　　　←UIはテキスボックス、初期値は空欄
カナ（名）　　　←UIはテキスボックス、初期値は空欄
メールアドレス　←UIはテキスボックス、初期値は空欄
性別　　　　　　←UIはラジオボタン（男、女の２種類）、初期値は「男」を選択済
アカウント権限

if($rows = $stmt->fetch()) {
$_SESSION['authority'] = $rows['authority'];
if ($_SESSION['authority'] == 1) {//管理者であるとき
    $regist = '<a href="./regist.php">アカウント登録</a>';
    $list = '<a href="./list.php">アカウント一覧</a>';
} else {//管理者でないとき
    $regist = '';
    $list = '';
}
}

if($_POST['idd'] == "" and $_POST['sei'] == "" and $_POST['mei'] == "" and $_POST['kana'] == ""){ //すべての入力内容が未入力の場合
    $stmt=$pdo->query("select * from diworks_blogs ORDER BY id DESC;");
} elseif($_POST['idd'] != "") {
    $stmt = $pdo->query("select * from diworks_blogs where id = '".$_POST['idd']."'");
} elseif($_POST['sei'] != "") {
    $stmt = $pdo->query("select * from diworks_blogs where family_name LIKE '%".$_POST['sei']."%'");
} elseif($_POST['mei'] != "") {
    $stmt = $pdo->query("select * from diworks_blogs where last_name LIKE '%".$_POST['mei']."%'");
}
*/

if($_POST['family_names'] == "" and $_POST['last_names'] == "" and $_POST['family_name_kanas'] == "" and $_POST['last_name_kanas'] == "" and $_POST['mails'] == "" and $_POST['genders'] == "" and $_POST['authoritys'] == ""){
    $conditions = 'ORDER BY id DESC';
} elseif($_POST['family_names'] != ""){
    $conditions = "where family_name LIKE '%".$_POST['family_names']."%'";
} elseif($_POST['last_names'] != ""){
    $conditions = "where last_name LIKE '%".$_POST['last_names']."%'";
} elseif($_POST['family_name_kanas'] != ""){
    $conditions = "where family_name_kana LIKE '%".$_POST['family_name_kanas']."%'";
} elseif($_POST['last_name_kanas'] != ""){
    $conditions = "where last_name_kana LIKE '%".$_POST['last_name_kanas']."%'";
} elseif($_POST['mails'] != ""){
    $conditions = "where mail LIKE '%".$_POST['mails']."%'";
} 

/*elseif($_POST['genders'] != ""){
    $conditions = "where gender = ".$_POST['genders'];
} elseif($_POST['authoritys'] != ""){
    $conditions = "where authority = ".$_POST['authoritys'];
}
*/

$stmt=$pdo->query("select * from diworks_blogs ".$conditions);

/*
var_dump($stmt);
var_dump($_POST['mail']);
*/
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>テスト</title>
        <link rel = "stylesheet" type = "text/css" href = "style.css">
    </head>
    
    <script src="update.js" type="text/javascript"></script>
    <body>
        
        
        <form action="ttest.php" method="post">
            <tr bgcolor="white">
                <td>名前(姓)</td><td><input type="text" class="search" name="family_names"></td>
                <td>名前(名)</td><td><input type="text" class="search" name="last_names"></td>
                <td>カナ(性)</td><td><input type="text" class="search" name="family_name_kanas"></td>
                <td>カナ(名)</td><td><input type="text" class="search" name="last_name_kanas"></td>
                <td>メールアドレス</td><td><input type="text" class="search" name="mails"></td>
                <td>性別</td><td><input type="text" class="search" name="genders"></td>
                <td>アカウント権限</td><td><input type="text" class="search" name="authoritys"></td>
            </tr>
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
                    <?php    
                    echo $row['id'];
                    ?>
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
                       
    </body>
</html>

