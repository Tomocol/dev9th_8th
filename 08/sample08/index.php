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
    <div class="navbar-header"><a class="navbar-brand" href="select.php">BOOKMARK LIST</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- <form method="post" action="insert.php">

  <div class="jumbotron">
   <fieldset>
    <legend>フリーアンケート</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>Email：<input type="text" name="email"></label><br>
     <label><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form> -->

<form method="post" action="insert.php">
<div class="bm form">
<fieldset>
<legend>RESISTRATION FORM</legend>
<label>BOOK NAME ：<input type="text" name="book_name" id="book_name"></label><br>
<label>BOOK URL：<input type="text" name="book_url" id="book_url"></label><br><label>COMMENT:</label><br>
<label><textarea name="comment" id="comment" cols="40" rows="4"></textarea><br>
<input type="submit" value="resistration">
</fieldset>
</div>
</form>
<!-- Main[End] -->


</body>
</html>
