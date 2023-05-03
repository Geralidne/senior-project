<!DOCTYPE html>
<html>
<head>
	<title>數據庫導航</title>
	<style>
		button {
			font-size: 1.5rem;
			padding: 1rem 2rem;
			background-color: #4CAF50;
			color: white;
			border: none;
			border-radius: 0.5rem;
			cursor: pointer;
			transition: all 0.3s ease-in-out;
		}

		button:hover {
			background-color: #3e8e41;
			transform: scale(1.1);
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
        p {
            text-align: center;
        }
        h1{
            text-align: center;
        }
        h2{
            text-align: center;
        }
        .button-container {
            display: flex;
            align-items: center;
            justify-content: center;
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
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="index.php"><span style="font-size:3px;padding-left:225em; padding-right: 5px;">首頁</a></span>|
      <a href="info.php"><span style="font-size:3px; padding-right: 5px;">碳排計算</a></span>|
      <a href="fix.php"><span style="font-size:3px; padding-right: 5px;">維修報備</a></span>|
     
      <a href="signIn.php"><span style="font-size:3px; padding-right: 5px;">登出</a></span>
    </div>
  </div>
</div>
</header>
<hr>
	<header>
        
        <br>
        <br>
        <br>
	</header>
	<main>
		<section>
			<h2>員工數據庫</h2>
			
            <section class="button-container">
			<button onclick="location.href='http://your-employee-database-url.com'">導航到員工數據庫</button>
		</section>
        <br>
        <br>
        <br>
        <section class="button-container">
		<section>
			<h2>碳盤查數據庫</h2>
			
            <section class="button-container">
			<button onclick="location.href='http://your-investigation-database-url.com'">導航到談盤查數據庫</button>
		</section>
	</main>
	<footer>
	
	</footer>
</body>
</html>
