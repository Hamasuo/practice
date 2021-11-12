<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
//$stmt=$pdo->query("select * from diworks_blogs ORDER BY id DESC;");

if($_POST["abc"] != "" or $_POST["def"] != "" or $_POST["123"] != "" or $_POST["456"] != ""){ //IDおよびユーザー名の入力有無を確認
$stmt = $pdo->query("select * from diworks_blogs where id = '".$_POST["abc"]."' or last_name LIKE '%".$_POST["def"]."%' or family_name_kana LIKE '%".$_POST["123"]."%' or last_name_kana LIKE '%".$_POST["456"]."%'"); //SQL文を実行して、結果を$stmtに代入する。
}
//Notice: Undefined offset: 123 in /Applications/MAMP/htdocs/d.i.blogs/ttest.php on line 8 ※記号並び再確認
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
                <td>名前(姓)</td><td><input type="text" class="search" name="abc"></td>
                <td>名前(名)</td><td><input type="text" class="search" name="def"></td>
                <td>名前(姓)</td><td><input type="text" class="search" name="123"></td>
                <td>名前(名)</td><td><input type="text" class="search" name="456"></td>
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

