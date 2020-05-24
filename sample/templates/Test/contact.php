<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test $test
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>jobpop_contact</title>
<link rel="stylesheet" type="text/css" href="../webroot/css/base.css">
<link rel="stylesheet" type="text/css" href="../webroot/css/contact.css">
<script type="text/javascript" src="../webroot/js/jquery.js"></script>
<script type="text/javascript" src="../webroot/js/jquery.validate.min.js"></script>
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

			<div id="header">
			  <div id="logo">
			    <a href="/jobpop/index.php"><img src="../webroot/img/logo.png" alt="logo"></a>
			  </div>
			  <div id="menu">
			    <ul>
			      <li>
			        <a href="/jobpop/index.php">Home</a>
			      </li>
			      <li>
			        <a href="/jobpop/what's.php">What's</a>
			      </li>
			      <li>
			        <a href="/jobpop/company.php">Company</a>
			      </li>
			      <li>
			        <a href="/jobpop/recruit.php">Recruit</a>
			      </li>
			      <li>
			        <a href="/jobpop/qa.php">Q&A</a>
			      </li>
			      <li>
			        <a href="/jobpop/access.php">Access</a>
			      </li>
			      <li>
			        <a href="/jobpop/blog.php">Blog</a>
			      </li>
			      <li>
			        <a href="contact">Contact</a>
			      </li>
			    </ul>
			  </div>
			</div>

      <div id="main_contact">
        <h1>contact</h1>
        <h2>下記の項目をご記入の上送信ボタンを押してください</h2>
        <p class="bun">送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。<br>なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。
          <br><span>*</span>は必須項目となります。</p>

			<?= $this->Form->create($test,['action' => 'conplete']) ?>
        <!-- <form class="form" method="POST" action="conplete"> -->
          <div id="form1">
            <dl class="clearfix">
             	<!-- <dt>氏名<span>*</span></dt> -->
             	<!-- <dd><input type="text" name="NAME"></dd> -->
							<?php	echo $this->Form->control('NAME'); ?>
            </dl>
						<dl>
              <!-- <dt>フリガナ<span>*</span></dt> -->
              <!-- <dd><input type="text" name="kana"></dd> -->
							<?php	echo $this->Form->control('kana'); ?>
            </dl>
            <dl>
              <!-- <dt>電話番号</dt> -->
              <!-- <dd><input type="text" name="tell"></dd> -->
							<?php	echo $this->Form->control('tell'); ?>
            </dl>
            <dl>
              <!-- <dt>メールアドレス<span>*</span></dt> -->
              <!-- <dd><input type="text" name="mail"></dd> -->
							<?php	echo $this->Form->control('mail'); ?>
            </dl>
          </div>

        <h2>1.お問い合わせ内容をご記入ください<span>*</span></h2>
          <div id="form2">
            <dl>
							<?php echo $this->Form->control('toi'); ?>
              <!-- <dd><textarea type="text" name="toi"></textarea></dd> -->
							<?= $this->Form->button(__('Submit')) ?>
              <!-- <input type="submit" value="確 認" id="submit_btn"> -->
            </bl>
          </div>
        </form>
			<?= $this->Form->end() ?>

    </div>

		<div id="footer">
		  <a>
		    <p>Powerd by SIGNAL Co.Ltd</p>
		  </a>
		</div>

    </div>
</body>
</html>
