<!DOCTYPE html>
<html lang=' zh-TW'>
<head>
<meta charset="utf-8"/>
<title>維修報備</title>
<meta http-equiv="refresh" content="60" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
hr {
  border-color: #F0FFFF;}

</style>
</head>
<html>
	
<body>
<!--碳排計算器色變-->
<div>
  <div>
    <div style="background: #F0FFFF no-repeat center center; background-size: behind;">
      <img src="images/圖片1.png" width="100" alt="" style="vertical-align:middle"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><span style="font-size:2em;color:forestgreen">產品</span></b>
      <b><span style="font-size:2em;color:darkgreen">碳排</span></b>
      <b><span style="font-size:2em;color:grey;">計算器</span></b>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
        

     
      <a href="index.php"><span style="font-size:3px;padding-left:225em; padding-right: 5px;">首頁</a></span>|

      
       <a href="info.php"><span style="font-size:3px; padding-right: 5px;">碳排計算</a></span>|
      <a href="fix.php"><span style="font-size:3px; padding-right: 5px;">維修報備</a></span>|
      <a href="data_in.php"><span style="font-size:3px; padding-right: 5px;">數據庫</a></span>|

      <a href="signIn.php"><span style="font-size:3px; padding-right: 5px;">登出</a></span>
    </div>
  </div>
</div>

<hr>
<h1 id="form-title">問題回報單</h1>
    <style>
		 span{
        color:#339FFF;
      }
    body {
			background-color: #f6f6f6;
			font-family: Arial, sans-serif;
		}
		h1 {
			color: #333;
			text-align: center;
		}
		#form-title {
  			text-decoration: none;
		}
		h1 {
  color: #333;
  text-align: center;
  text-decoration: none;
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


		form {
			background-color: #fff;
			border: 1px solid #ddd;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0,0,0,0.1);
			margin: 0 auto;
			max-width: 500px;
			padding: 20px;
		}
        label {
			color: #333;
			display: inline-block;
			font-size: 16px;
			font-weight: bold;
			margin-bottom: 5px;
		}
		input[type="text"],
		input[type="email"],
		input[type="tel"],
		select,
		textarea {
			border: 1px solid #ddd;
			border-radius: 5px;
			font-size: 16px;
			padding: 10px;
			width: 100%;
		}
        input[type="submit"] {
			background-color: #333;
			border: none;
			border-radius: 5px;
			color: #fff;
			cursor: pointer;
			font-size: 16px;
			padding: 10px 20px;
			margin-top: 10px;
		}
		input[type="submit"]:hover {
			background-color: #555;
		}
</style>
<form action="submit_form.php" method="POST">
		<div class="form-group">
			<label for="name">姓名：</label>
			<input type="text" id="name" name="name" required>
		</div>

		<div class="form-group">
			<label for="phone">職位：</label>
			<input type="tel" id="phone" name="phone" required>
		</div>

		<div class="form-group">
			<label for="issue-type">問題類型：</label>
			<select id="issue-type" name="issue-type" required>
				<option value="">請選擇問題類型</option>
				<option value="technical">技術問題</option>
				<option value="service">服務問題</option>
				<option value="other">其他問題</option>
			</select>
		</div>

		<div class="form-group">
			<label for="issue-description">問題描述：</label>
			<textarea id="issue-description" name="issue-description" required></textarea>
		</div>

		<div class="form-group">
			<input type="submit" value="提交">
		</div>
	</form>
<style>
.form-group {
	margin-bottom: 20px;
}

label {
	display: block;
	font-weight: bold;
	margin-bottom: 5px;
}

input,
select,
textarea {
	border: none;
	border-bottom: 1px solid #ddd;
	font-size: 16px;
	padding: 5px 10px;
	width: 100%;
}

input[type="submit"] {
	background-color: #333;
	border: none;
	border-radius: 5px;
	color: #fff;
	cursor: pointer;
	font-size: 16px;
	padding: 10px 20px;
	transition: background-color 0.2s ease-in-out;
}

input[type="submit"]:hover {
	background-color: #555;
}




</style>


</body>