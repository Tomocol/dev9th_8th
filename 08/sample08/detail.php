<?php
//GET送信されたidを取得

//
$id = $_GET["id"];
echo "GET:".$id;

 //GETデータ送信リンク作成
 try {
  $pdo = new PDO('mysql:dbname=gs_db08;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}
//DBと一緒に接続する
?>


<?PHP
//$id = $_GET["book_id"];
//echo "GET:".$id;
//必ずidを取得する
//echo "GET:".$id;

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table where book_id=:book_id");
//whereでDBのどこを参照するか探す

$stmt -> bindValue(':book_id', $id, PDO::PARAM_INT);
//bindValueで$stmtに入れる。
$status = $stmt->execute();
?>

<?PHP
//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる
  $row = $stmt->fetch();
  }
?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>BOOK LIST</legend>
    <div class="bm form">
    <fieldset>
    <legend>RESISTRATION FORM</legend>
    <label>BOOK NAME ：<input type="text" name="book_name" id="book_name"value="<?=$row["book_name"]?>"></label><br>
    <label>BOOK URL：<input type="text" name="book_url" id="book_url"value="<?=$row["book_url"]?>"></label><br><label>COMMENT:</label><br>
    <label><textarea name="comment" id="comment" cols="40" rows="4"value="<?=$row["comment"]?>"></textarea><br>
    <input type="submit" value="resistration">
    </fieldset>
    </div>
    </form>
     <!--value="　◆=$row["name"]◆　にコメントを表示する。-->
     
     <!-- <label><textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信"> -->
     <input type="hidden" id="postId" name="id" value="<?=$row["book_id"]?>">
    </fieldset>
  </div>
</form>


<!-- Main[End] -->


</body>
</html>
