<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>jobpop_contact</title>
<link rel="stylesheet" type="text/css" href="css/base.css">
<link rel="stylesheet" type="text/css" href="css/contact.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script>

</script>
</head>
<body>
  <body>
    <div id="wrapper">

    <?php require("Common/header.php") ?>

      <div id="main_contact">
        <h1>contact</h1>
        <h2>下記の項目をご記入の上送信ボタンを押してください</h2>
        <p class="bun">ご入力内容の確認 <span>*</span>は必須項目となります。</p>
        <form method="POST" action="conplete.php">
          <div id="form1">
            <dl>
              <dt>氏名<span>*</span></dt>
              <dd><?php echo $_POST["NAME"];?>
                <input type="hidden" name="NAME" value="<?php echo $_POST["NAME"];?>">
              </dd>
            </dl>
            <dl>
              <dt>フリガナ<span>*</span></dt>
              <dd><?php echo $_POST["kana"];?>
                <input type="hidden" name="kana" value="<?php echo $_POST["kana"];?>">
              </dd>
            </dl>
            <dl>
              <dt>電話番号</dt>
              <dd><?php echo $_POST["tell"];?>
                <input type="hidden" name="tell" value="<?php echo $_POST["tell"];?>">
              </dd>
            </dl>
            <dl>
              <dt>メールアドレス<span>*</span></dt>
              <dd><?php echo $_POST["mail"];?>
                <input type="hidden" name="mail" value="<?php echo $_POST["mail"];?>">
              </dd>
            </dl>
          </div>

          <h2>お問い合わせ内容の確認<span>*</span></h2>
          <div id="form2">
            <dl>
              <dd><?php echo nl2br($_POST["toi"]);?>
                <input type="hidden" name="toi" value="<?php echo $_POST["toi"];?>">
              </dd>
              <dd id="coment">こちらの内容でよろしいですか</dd>
                <input type="submit" value="送 信" id="submit_btn">
            </bl>
          </div>
        </form>


    </div>

    <?php require("Common/footer.php") ?>

    </div>
</body>
</html>
