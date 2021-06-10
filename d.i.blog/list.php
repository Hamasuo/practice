<?php

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

$stmt=$pdo->query("select * from diworks_blog entries ORDER BY id DESC");

?>



<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録画面</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>

    <script src="regist.js" type="text/javascript"></script>
<body>
    
<header class="logo">ナビゲーションバー</header>

<main>
    
    <div class="main-container_list">
        
        <div class="left_list">
        
            <div class="page_name">アカウント一覧画面</div>
            
        </div>
        
        <div class="right_list"></div>
    
        <div class="center_list">
            
            <table width="100%" bgcolor="black" cellspacing="1px" name="list_table">
                <tr bgcolor="white">
                <th>ID</th><th>名前（姓）</th><th>名前（名）</th><th>カナ(姓)</th><th>カナ(名)</th><th>メールアドレス</th><th>性別</th><th>アカウント権限</th><th>削除フラグ</th><th>登録日時</th><th>更新日時</th><th colspan="2">操作</th>
                </tr>
                
                    <?php
                    while($row=$stmt->fetch()){
                    ?>
                    <tr bgcolor="white">
                        <td><?php echo $row['id']; ?></td>
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
                            <form action="update.php" method="post">
                            <input type="submit" value="更新">
                            <input type="hidden" name="id" value="<?=$row['id']?>">
                            </form>
                        <td>
                            <form action="delete.php" method="post">
                            <input type="submit" value="削除">
                            <input type="hidden" name="id" value="<?=$row['id']?>">
                            </form>

                    </tr>
                    <?php
                    }
                    ?>
            </table>
            
            
            
        </div>

    </div>
    
</main>
    

<footer class="logo">フッター</footer>
    
</body>

</html>