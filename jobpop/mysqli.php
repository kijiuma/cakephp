<?php

$mysqli = new mysqli("localhost:3308","root","root","date_connect");

if($mysqli->connect_error){
  echo "データベース接続に失敗しました";
  exit();
}
echo "データベース接続に成功しました";

$result = $mysqli->query("SELECT * FROM test");

// while($row = $result->fetch_assoc()){
//   echo "<br>";
//   echo $row["id"].",";
//   echo $row["NAME"].",";
//   echo $row["kana"].",";
//   echo $row["tell"].",";
//   echo $row["mail"].",";
//   echo $row["toi"]."<br>";
// }

$mysqli->close();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>mysqli接続テスト</title>
<link rel="stylesheet" type="text/css" href="css/base.css">
<link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>
  <section>
    <h1>データ送信一覧</h2>
    <table>
      <tr>
        <th>ID</th>
        <th>名前</th>
        <th>カタカナ</th>
        <th>電話番号</th>
        <th>メール</th>
        <th>お問い合わせ</th>
      </tr>
      <?php while($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?php echo $row["id"] ?></td>
        <td><?php echo $row["NAME"] ?></td>
        <td><?php echo $row["kana"] ?></td>
        <td><?php echo $row["tell"] ?></td>
        <td><?php echo $row["mail"] ?></td>
        <td><?php echo $row["toi"] ?></td>
      </tr>
      <?php endwhile; ?>
    </table>
  </section>

</body>
</html>
