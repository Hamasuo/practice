<?php
/*
if($_POST) {
$delete = $_POST["delete"];

//$mysqli = new mysqli("localhost","root","root","sampule_contact");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

if(isset($_POST['delete'],)){
$sql ="DELETE FROM contacts WHERE id = ?";
}
}

?>

if(isset($_POST['delete'])) {
  $delete = $_POST["delete"];
  $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
  $pdo -> autocommit ("FALSE");
  $sql = "DELETE FROM contacts WHERE id = ?";
  if ($stmt = $pdo->prepare($sql)) {
    $stmt->bind_param("i", $delete);
    $stmt->execute();
    $pdo->commit();
  }
  $pdo->close();
}


・スタイル変更
・デリート内容
・ボタン内容

<?php
*/
if(isset($_POST['delete'])) {
  $delete = $_POST["delete"];
  $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
  $sql = "DELETE FROM contacts WHERE id = ?";
}
?> 


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

</head>

<body>

<div id="delete">
<p>本当に削除してよろしいですか？</p>
</div>

<form action="contact.php" method="post">
<input type="submit" value="戻る">
</form>
</body>
</html>