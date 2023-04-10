<!DOCTYPE html>
<html lang=' zh-TW'>
<head>
<meta charset="utf-8"/>
<title>問題回報單</title>
<meta http-equiv="refresh" content="60" />
</head>
<html>
<body>
	<h1>問題回報單</h1>
    <style>
    body {
			background-color: #f6f6f6;
			font-family: Arial, sans-serif;
		}
		h1 {
			color: #333;
			text-align: center;
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
	<form>
		<label for="name">姓名：</label>
		<input type="text" id="name" name="name" required style="width: 300px;"><br>


		<label for="phone">職位：</label>
		<input type="tel" id="phone" name="phone" required><br>

		<label for="issue-type">問題類型：</label>
		<select id="issue-type" name="issue-type" required>
			<option value="">請選擇問題類型</option>
			<option value="technical">技術問題</option>
			<option value="service">服務問題</option>
			<option value="other">其他問題</option>
		</select><br>

		<label for="issue-description">問題描述：</label>
		<textarea id="issue-description" name="issue-description" required></textarea><br>

		<input type="submit" value="提交">
	</form>

</body>
</html>