<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>探排計算介面</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
      }
      h1 {
        text-align: center;
        color: #333;
      }
      form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }
      label {
        display: block;
        margin-bottom: 10px;
        color: #333;
        font-weight: bold;
      }
      input[type="text"] {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 100%;
        margin-bottom: 20px;
        box-sizing: border-box;
      }
      select {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 100%;
        margin-bottom: 20px;
        box-sizing: border-box;
      }
      button {
        background-color: #333;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
      }
      button:hover {
        background-color: #555;
      }
      .result {
        margin-top: 20px;
        padding: 10px;
        background-color: #f5f5f5;
        border: 1px solid #ccc;
        border-radius: 4px;
      }
    </style>
  </head>
  <body>
    <h1>探排計算介面</h1>
    <form>
      <label for="depth">探頭深度 (cm):</label>
      <input type="text" id="depth" name="depth" placeholder="請輸入探頭深度">

      <label for="distance">側向距離 (cm):</label>
      <input type="text" id="distance" name="distance" placeholder="請輸入側向距離">

      <label for="angle">側向角度 (°):</label>
      <input type="text" id="angle" name="angle" placeholder="請輸入側向角度">

      <label for="rotation">旋轉角度 (°):</label>
      <input type="text" id="rotation" name="rotation" placeholder="請輸入旋轉角度">

      <label for="unit">選擇單位:</label>
      <select id="unit" name="unit">
        <option value="metric">公制</option>
        <option value="imperial">英制</option>
      </select>

      <button type="button" onclick="calculate()">計算</button>
    </form>

    <div class="result">
      <h2>結果</h2>
      <p>檢測距
