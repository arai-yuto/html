<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" ccontent="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson1-2-2</title>
</head>
<body>
  
<?php
$tax = '10';
$int = (int)$tax;
$price01 = '100';
$int = (int)$tax;
$price02 = '200';
$int = (int)$tax;
$tax_price01 = '110';
$int = (int)$tax;
$tax_price02 = '220';
$int = (int)$tax;

echo "現在、消費税は{$tax}％です。<br />";
echo "<br />";
echo "鉛筆が{$price01}円で税込{$tax_price01}円です。<br />";
echo "<br />";
echo "消しゴムが{$price02}円で税込{$tax_price02}円です。";
?>
</body>
</html>