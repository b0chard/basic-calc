<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>basic calc</title>
</head>
<body>
  <h1>basic calc</h1>
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="GET">
    <label for="num1">first number:</label>
      <input type="text" name="num1" id="num1"><br>
    <label for="num1">second number:</label>
      <input type="text" name="num2" id="num2"><br>
    <label for="operation">operation:</label>
      <select name="operation" id="operation">
        <option value="select" selected>Select</option>
        <option value="add">Add</option>
        <option value="subtract">Subtract</option>
        <option value="multiply">Multiply</option>
        <option value="divide">Divide</option>
      </select><br>
    <input type="submit" name="calculate" value="calculate">
  </form>
  <?php include("./backend.php");?>
</body>
</html>