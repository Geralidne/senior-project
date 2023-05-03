<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>化妝品類別選擇</title>
    <style>
      body {
        font-family: Fantasy;
        background-color: #f5f5f5;
      }
      h1 {
        text-align: center;
        color: #333;
      }
      .button-group {
        max-width: 800px;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }
      .button {
        width: 200px;
        height: 200px;
        padding: 10px;
        margin: 10px;
        margin-bottom: 20px;
        background-color: #E0E0FF;
        border: 2px solid #ccc;
        border-radius: 4px;
        cursor: pointer;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
        text-align: center;
      }
      .button:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
      }
      .button img {
        display: block;
        margin: 0 auto;
        max-width: 100%;
        height: auto;
      }
      .grid-container {
        display: grid;
        grid-template-columns:  repeat(3, 1fr);
        grid-gap: 100px;
        justify-items: center;
      }
      a {
          text-decoration: none;
      }
     
      a:hover {
        text-decoration: underline;
        color:#339FFF;
      }
      .button img {
        display: block;
        margin: 0 auto;
        max-width: 100%;
        height: auto;
      }
      a:visited {
        text-decoration: none;
      }
    /* CSS code */
    .button span {
        color: gray;
        font-weight:bold;
        text-decoration: none;
      }
      span{
        color:#339FFF;
      }
      
</style>
    </style>
  </head>
  <body>
  <header>
<div>
  <div>
    <div style="background: #F0FFFF no-repeat center center; background-size: behind;">
      <img src="images/圖片1.png" width="100" alt="" style="vertical-align:middle"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><span style="font-size:2em;color:forestgreen">產品</span></b>
      <b><span style="font-size:2em;color:darkgreen">碳排</span></b>
      <b><span style="font-size:2em;color:grey;">計算器</span></b>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
 
        

      <a href="index.php"><span style="font-size:3px;padding-left:225em; padding-right: 5px;">首頁</a></span>|
 
      
      
      <a href="fix.php"><span style="font-size:3px; padding-right: 5px;">維修報備</a></span>|
      <a href="data_in.php"><span style="font-size:3px; padding-right: 5px;">數據庫</a></span>|

      <a href="signIn.php"><span style="font-size:3px; padding-right: 5px;">登出</a></span>
    </div>
  </div>
</div>
</header>
<hr>
    <h1>化妝品類別選擇按鈕</h1>
    <div class="button-group">
      <div class="grid-container">
        <a href="calculator.php">
          <div class="button">
            <img src="images/面膜.jpg" alt="面膜">
            <span>面膜</span>
          </div>
        </a>
        <a href="calculator2.php">
          <div class="button">
            <img src="images/化妝品.jpg" alt="Lipstick">
            <span>化妝品</span>
          </div>
        </a>
        <a href="calculator3.php">
          <div class="button">
            <img src="images/保養品.jpg" alt="Mascara">
            <span>保養品</span>
          </div>
        </a>
     
      </div>
    </div>
  </body>
</html>
