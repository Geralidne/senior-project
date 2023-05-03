<!DOCTYPE html>
<html lang='zh-TW'>
<head>
    <meta charset="UTF-8">
    <title>Makeup Carbon Footprint Calculator</title>
    
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Load custom CSS -->
    <link rel="stylesheet" href="style.css">
    <style>
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
    body {
        font-family: Fantasy;
        background-color: #f5f5f5;
      }

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
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
        

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
    <!-- Header section -->

    <!-- Main content section -->
    <main>
        <section class="container">
            <h1 class="text-center mb-5">計算保養品碳排</h1>
            <form>
                <div class="form-group">
                    <label for="product-type">產品種類</label>
                    <select class="form-control" id="product-type" name="product-type">
                        <option value="makeup1">保養品1</option>
                        <option value="makeup2">保養品2</option>
                        <option value="makeup3">保養品3</option>
                        <option value="makeup4">保養品4</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="product-quantity">數量</label>
                    <input type="number" class="form-control" id="product-quantity" min="0" required name="product-quantity">
                </div>
                
                <div class="form-group">
                    <label for="product-packaging">包裝</label>
                    <select class="form-control" id="product-packaging" name="product-packaging">
                        <option value="plastic">塑膠</option>
                        <option value="Box">紙盒</option>
                        <option value="paperbag">紙袋</option>
                    </select>
                    <br>
                    <div class="form-group">
                    <label for="package-weight">包裝重量</label>
        <div class="input-group">
            <div class="input-group-prepend">
            <input type="number" class="form-control" id="product-quantity" min="0" required name="product-quantity">
                </div>
                    <select class="form-select" id="product-unit" name="product-unit">
                    <option value="g">公克</option>
                    <option value="kg">公斤</option>
                    <option value="t">公噸</option>
                    </select>
            </div>

                </div>
                
                <button type="button" class="btn btn-primary btn-block" onclick="calculateCarbon()">計算</button>
            </form>
            
            <div id="carbon-result" class="mt-5"></div>
        </section>
    </main>
    
    <!-- Load jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    