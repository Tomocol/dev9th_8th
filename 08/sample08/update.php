

<?php
$id = $_POST["book_id"];
$name = $_POST["book_name"];
$book_url = $_POST["book_url"];
$comment = $_POST["comment"];
echo "POST:".$id;

try {
    $pdo = new PDO('mysql:dbname=gs_db08;charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
    exit('データベースに接続できませんでした。'.$e->getMessage());
  }
  

//1.POSTでParamを取得
$update = $pdo ->prepare("UPDATE gs_bm_table SET name=:book_name, book_url=:book_url, comment=:comment WHERE id=:id");
$update -> bindValue(':book_name', $name, PDO::PARAM_STR);
$update -> bindValue(':book_url', $book_url, PDO::PARAM_STR);
$update -> bindValue(':comment', $comment, PDO::PARAM_STR);
$update -> bindValue(':book_id', $id, PDO::PARAM_INT);


//2.DB接続など


//3.UPDATE gs_an_table SET ....; で更新(bindValue)
//　基本的にinsert.phpの処理の流れです。
$status = $update->execute();
header("Location: select.php");


?>
