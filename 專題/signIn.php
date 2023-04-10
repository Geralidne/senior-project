<?php
    // 檢查用戶是否提交表單
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // 檢查用戶名和密碼是否匹配
      $username = "user";  // 此處應該是你真正的用戶名
      $password = "pass";  // 此處應該是你真正的密碼
      if ($_POST["username"] == $username && $_POST["password"] == $password) {
        // 匹配成功，重定向到主頁面
        header("Location: index.php");
        exit;
      } else {
        // 匹配失敗，顯示錯誤消息
        echo "<p>用戶名</p>";
      }}
      ?>
<!DOCTYPE html>
<html lang='zh-TW'>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="refresh" content="60" />
  <title>員工登入系統</title>
  <div class="system_name">
  <h2>員工登入系統</h2>
</div>

<div class="login_page">
  <div id="container1">
    <div class="login">
      <h3>登入 Login</h3>
      <?php if (isset($error_msg)) { ?>
        <p style="color: red;"><?php echo $error_msg; ?></p>
      <?php } ?>
      <form method="POST" action="">
        <input type="text" id="username" name="username" placeholder="員工企編" required>
        <div class="tab"></div>
        <input type="password" id="password" name="password" placeholder="密碼" required>
        <div class="tab"></div>
        <input type="submit" value="登入" class="submit">
      </form>
      <h5 onclick="show_hide()">註冊帳號</h5>
    </div><!-- login end-->
  </div><!-- container1 end-->
</div><!-- login_page end-->

<div class="signup_page">
  <div id="container2">
    <div class="signup">
      <h3>註冊 Sign Up</h3>
      <form action="">
        <input type="text" id="fullname" name="fullname" placeholder="使用者全名" required>
        <div class="tab"></div>
        <input type="text" id="username2" name="username" placeholder="企業編碼" required>
        <div class="tab"></div>
        <input type="password" id="password2" name="password" placeholder="密碼" required>
        <div class="tab"></div>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="確認密碼" required>
        <div class="tab"></div>
        <input type="submit" value="註冊" class="submit">
      </form>
      <h5 onclick="show_hide()">登入帳號



  <style>
    * {
      font-family: 微軟正黑體;
    }

    body {
      background-color: white;
    }

    #username,
    #password,
    h3,
    #fullname,
    #comfirm_password,
    #username2,
    #password2 {
      width: 200px;
      height: 20px;
      margin: 10px;
      color: #df5334;
    }

    h5 {
      margin: 20px;
      color: #a3a2a3;
    }

    h5:hover {
      color: black;
    }

    #container1,
    #container2 {
      margin: 50px;
      padding: 50px;
      width: 250px;
      height: 250px;
      background-color: white;
      border-radius: 5px;
      border-top: 10px solid #df5334;
      box-shadow: 0 0px 70px rgba(0, 0, 0, 0.1);
      /*定位對齊*/
      position: relative;
      margin: auto;
      top: 100px;
      text-align: center;
    }

    .system_name {
      /*定位對齊*/
      position: relative;
      margin: auto;
      top: 100px;
      text-align: center;
    }

    .submit {
      color: white;
      background: #df5334;
      width: 200px;
      height: 30px;
      margin: 10px;
      padding: 5px;
      border-radius: 5px;
      border: 0px;
    }

    .submit:hover {
      background: #db6937;
    }

    #container2 {
      visibility: hidden;
      /*剛開始消失*/
      height: 300px;
    }

    #copyright {
      text-align: center;
      color: #a3a2a3;
      margin: -200px 0px 0px 0px;
      font-size: 14px;
    }

    input {
      padding: 5px;
      border: none;
      border: solid 1px #ccc;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <?php
    // 產生企業編碼與密碼
    $enterprise_code = uniqid('e');
    $password = uniqid();

    // 保存企業編碼與密碼到文件中
    file_put_contents('users.txt', "$enterprise_code:$password\n", FILE_APPEND);

    // 檢查用戶是否提交表單
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // 檢查用戶名和密碼是否匹配
      $username = $_POST["username"];
      $password = $_POST["password"];
      $users = file('users.txt');
      $found = false;
      foreach ($users as $user) {
        $line = explode(',', $user);
        if ($line[0] == $username && trim($line[1]) == $password) {
          $found = true;
          break;
        }
      }
      if ($found) {
        // 匹配成功，重定向到主頁面
        header("Location: index.php");
        exit;
      } else {
        // 匹配失敗，顯示錯誤消息
        echo "<p>用戶名或密碼不正確，請重新輸入。</p>";
      }
      
    }
   