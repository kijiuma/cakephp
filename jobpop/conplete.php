<?php
if($_POST){
  $NAME = $_POST["NAME"];
  $kana = $_POST["kana"];
  $tell = $_POST["tell"];
  $mail = $_POST["mail"];
  $toi = $_POST["toi"];

  $mysqli = new mysqli("localhost","root","centOS7%","sample");

  if($mysqli->connect_error){
    echo "データベース接続に失敗しました";
    exit();
  }
  echo "データベース接続に成功しました";
}

$result = $mysqli->query("INSERT INTO test VALUES(NULL,'$NAME','$kana','$tell','$mail','$toi')");

if($result == 0){
  echo "登録失敗しました";
} else{
  echo "登録しました";
}

$mysqli->close();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>jobpop_contact</title>
<link rel="stylesheet" type="text/css" href="css/base.css">
<link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>
  <body>
    <div id="wrapper">

    <?php require("Common/header.php") ?>

    <div id="main_contact">
        <h1>contact</h1>
        <h2>お問い合わせが完了しました。</h2>
    </div>

  　<div id="top_r">
    　<a href="/jobpop/contact.php">トップへ戻る</a>
　　</div>


    <?php require("Common/footer.php") ?>

    </div>
</body>
</html>
