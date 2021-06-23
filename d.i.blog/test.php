<!doctype HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録確認画面</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
    </head>
    
<body>
    <div class="confirm">
                    <p><?php echo $_POST['family_name'];?></p>
                    <p class="con_p"><?php echo $_POST['last_name'];?></p>
                    <p class="con_p"><?php echo $_POST['family_name_kana'];?></p>
                    <p class="con_p"><?php echo $_POST['last_name_kana'];?></p>
                    <p class="con_p"><?php echo $_POST['mail'];?></p>
                    <p class="con_p">●●●●●●●</p>
                    <p class="con_p">
                        <?php
                            if ($_POST['gender'] == 0){
                                echo "男";}
                            else{echo "女";}
                        ?>
                    </p>
                    <p class="con_p"><?php echo $_POST['postal_code'];?></p>
                    <p class="con_p"><?php echo $_POST['prefecture'];?></p>
                    <p class="con_p"><?php echo $_POST['address_1'];?></p>
                    <p class="con_p"><?php echo $_POST['address_2'];?></p>
                    <p class="con_p">
                        <?php 
                            if($_POST['authority'] == 0){
                                echo "一般";}
                            else{echo "管理者";}
                        ?>
                    </p>
                </div>
    </body>

</html>