
<?php
//GET値取得
$id = $_GET["book_id"];
$pdo = new PDO('mysql:dbname=gs_db08;charset=utf8;host=localhost','root','');

//データ登録SQL作成
$update = $pdo->prepare("DELETE FROM gs_bm_table WHERE id=:book_id"); 

$update->bindValue(':book_id', $id, PDO::PARAM_INT);
//SQL実行

$status = $update->execute();
header("Location: select.php");

  
?>
