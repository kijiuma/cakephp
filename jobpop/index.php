<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>jobpop_home</title>
<link rel="stylesheet" type="text/css" href="css/base.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script>

// $(function(){
//     $("#moji .first img").fadeIn(2000, function(){
//       $("#moji .first img").fadeOut(10000, function(){
//         $("#moji .second img").fadeIn(2000, function(){
//           $("#moji .second img").fadeOut(10000, function(){
//           });
//         });
//       });
//     });
// });

var now = 1;

setTimeout(function(){
	slideShow();
	setInterval("slideShow()",10000);
},2000);

function slideShow(){
	if(now == 2){
		$("#moji .first img").fadeOut(1000,function(){
			$("#moji .second img").fadeIn(1000);
		});
		now = 1;
	} else {
		$("#moji .second img").fadeOut(1000,function(){
			$("#moji .first img").fadeIn(1000);
		});
		now = 2;
	}
}

</script>
</head>
<body>
  <div id="wrapper">

    <?php require("Common/header.php") ?>

    <div id="main">

      <div id="main_img">
        <img src="img/main_img.jpg" alt="mein_img">
      </div>

      <div id="moji">
        <ul class="slide">
          <li class="first">
            <img src="img/catchcopy.png" alt="mein_img">
          </li>
          <li class="second">
            <img src="img/catchcopy2.png" alt="mein_img">
          </li>
        </ul>
      </div>

    </div>

    <div id="title">
      <img src="img/title.png" alt="title">
    </div>

    <div id="item" class="clearfix">
      <ul>
        <li>
          <a href="/jobpop/what's.php"><img src="img/btn01.png" alt="btn01"></a>
          <p class="moji">ジョブポップとはこういう会社です。</p>
          <p class="more">more</p>
        </li>
        <li>
          <a href="/jobpop/company.php"><img src="img/btn02.png" alt="btn02"></a>
          <p class="moji">会社概要</p>
          <p class="more">more</p>
        </li>
        <li>
          <a href="/jobpop/recruit.php"><img src="img/btn03.png" alt="btn03"></a>
          <p class="moji">随時スタッフ募集しています。</p>
          <p class="more">more</p>
        </li>
        <li>
          <a href="/jobpop/qa.php"><img src="img/btn04.png" alt="btn04"></a>
          <p class="moji">よくある質問Q&A</p>
          <p class="more">more</p>
        </li>
        <li>
          <a href="/jobpop/contact.php"><img src="img/btn05.png" alt="btn05"></a>
          <p class="moji">ジョブポップへのお問い合せ</p>
          <p class="more">more</p>
        </li>
      <ul>
    </div>

    <?php require("Common/footer.php") ?>

  </div>
</body>
</html>
