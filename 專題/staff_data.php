<!DOCTYPE html>
<html lang=' zh-TW'>
<head>
<meta charset="utf-8"/>
<title>員工資料編輯</title>
<meta http-equiv="refresh" content="60" />

<style>

body {
  background-image: url('/images/圖片');
  background-size: cover;
  background-repeat: no-repeat;
  font-family: Arial, sans-serif;
  align-items: center;
}

  body {
    background-color: #F5F5F5;
    font-family: Arial, sans-serif;
    align-items: center; 
  }

  form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 5px rgba(0,0,0,0.3);
    max-width: 500px;
    margin: 0 auto;
  }

  label {
    display: block;
    font-weight: bold;
    margin-bottom: 10px;
    color: #333;
  }

  input[type="text"],
  input[type="email"],
  input[type="tel"],
  input[type="date"] {
    border-radius: 3px;
    border: 1px solid #ccc;
    padding: 5px;
    width: 100%;
    margin-bottom: 10px;
    color: #333;
    background-color: #E0FFE0;
  }

  input[type="text"]:focus,
  input[type="email"]:focus,
  input[type="tel"]:focus,
  input[type="date"]:focus {
    outline: none;
    border: 1px solid #008000;
  }

  input[type="submit"] {
    background-color: #008000;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
  }

  input[type="submit"]:hover {
    background-color: red;
  }

  #copyright {
    text-align: center;
    margin-top: 50px;
  }
</style>
</head>
<body>
<br></br>
<br></br>
<br></br>
    <title>Staff Data Form</title>
    <form>
      <label for="name" style="color: #006600;">姓名:</label>
      <input type="text" id="name" name="name">

      <label for="position" style="color: #006600;">職位:</label>
      <input type="text" id="position" name="position">

      <label for="email" style="color: #006600;">企編:</label>
      <input type="email" id="email" name="email">

      <label for="phone" style="color: #006600;">密碼:</label>
      <input type="tel" id="phone" name="phone">


    

      <input type="submit" value="Submit">

    </form>
    
    <div id="copyright"><h4><span style="color:grey;">Copyright © 2023 A事業股彬有限公司</span></h4></div>
    <style>
    #copyright {
  text-align: center;
  margin-top: 50px;
}