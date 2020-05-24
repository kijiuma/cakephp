<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>jobpop_contact</title>
<link rel="stylesheet" type="text/css" href="css/base.css">
<link rel="stylesheet" type="text/css" href="css/contact.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script>

$(function(){
	$("form").validate({
	  rules : {
		 NAME: {
     required: true
		 },
		 kana: {
			 required: true
		 },
		 mail: {
			 required: true
		 },
     toi: {
       required: true
		 },
   },
   messages: {
    NAME : {
      required: "入力してください"
     },
     kana : {
      required: "入力してください"
     },
     mail : {
      required: "入力してください"
     },
    toi : {
      required: "入力してください"
    },
   }
  }
 )}
);

</script>
</head>
<body>
  <body>
    <div id="wrapper">

    <?php require("Common/header.php") ?>

      <div id="main_contact">
        <h1>contact</h1>
        <h2>下記の項目をご記入の上送信ボタンを押してください</h2>
        <p class="bun">送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。<br>なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。
          <br><span>*</span>は必須項目となります。</p>
        <form class="form" method="POST" action="confrim.php">
          <div id="form1">
            <dl class="clearfix">
              <dt>氏名<span>*</span></dt>
              <dd><input type="text" name="NAME"></dd>
            </dl>
            <dl>
              <dt>フリガナ<span>*</span></dt>
              <dd><input type="text" name="kana"></dd>
            </dl>
            <dl>
              <dt>電話番号</dt>
              <dd><input type="text" name="tell"></dd>
            </dl>
            <dl>
              <dt>メールアドレス<span>*</span></dt>
              <dd><input type="text" name="mail"></dd>
            </dl>
          </div>

        <h2>1.お問い合わせ内容をご記入ください<span>*</span></h2>
          <div id="form2">
            <dl>
              <dd><textarea type="text" name="toi"></textarea></dd>
              <input type="submit" value="確 認" id="submit_btn">
            </bl>
          </div>
        </form>


    </div>

    <?php require("Common/footer.php") ?>

    </div>
</body>
</html>
