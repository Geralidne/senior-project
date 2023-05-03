<!DOCTYPE html>
<html lang='zh-TW'>
<head>
<meta charset="utf-8"/>
<title>化妝品碳盤查</title>
<meta http-equiv="refresh" content="60" />
<!-- 引入 Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<style>
 hr {
  border-color: #F0FFFF;
  }

 span{
        color:#339FFF;
      }
      a {
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
        color:#339FFF;
    }

    a:visited {
        text-decoration: none;
    }
    .swiper-slide img {
      display: block;
      margin: auto;
      transform: translate(0%, 50%);
    }
    body {
        font-family: Fantasy;
        background-color: #f5f5f5;
      }
</style>
</head>
<body>
<!--碳排計算器色變-->
<header>
<div>
  <div>
    <div style="background: #F0FFFF no-repeat center center; background-size: behind;">
      <img src="images/圖片1.png" width="100" alt="" style="vertical-align:middle"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><span style="font-size:2em;color:forestgreen">產品</span></b>
      <b><span style="font-size:2em;color:darkgreen">碳排</span></b>
      <b><span style="font-size:2em;color:grey;">計算器</span></b>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="index.php"><span style="font-size:3px;padding-left:225em; padding-right: 5px;">首頁</a></span>|
      <a href="info.php"><span style="font-size:3px; padding-right: 5px;">碳排計算</a></span>|
      <a href="fix.php"><span style="font-size:3px; padding-right: 5px;">維修報備</a></span>|
      <a href="data_in.php"><span style="font-size:3px; padding-right: 5px;">數據庫</a></span>|
      <a href="signIn.php"><span style="font-size:3px; padding-right: 5px;">登出</a></span>
    </div>
  </div>
</div>
</header>
<hr>
<!-- 幻燈片區塊 -->
<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide"><img src="images/樣本.jpg" alt="Image 1"><br><br><br><br><img src="images/調貨.jpg" width="150"alt="Image 6"></div>
    <div class="swiper-slide"><img src="images/備貨.jpg" alt="Image 2"><br><br><img src="images/熊大.jpg"width="200" alt="Image 4"></div>
    <div class="swiper-slide"><br><br><br><img src="images/平台.jpg" alt="Image 3"><br><br><img src="images/update.jpg" alt="Image 5"></div>
  </div>
  <div class="swiper-pagination"></div>
<!-- 引入 Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper('.swiper-container', {
    loop: true, // 循環播放
    autoplay: { // 自動播放
      delay: 4000, // 每隔 5 秒自動播放
      disableOnInteraction: false, // 使用者點擊後繼續自動播放
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>
</body>
</html>