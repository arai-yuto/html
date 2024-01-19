<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" ccontent="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson1-2-1</title>
</head>
<body>
<?php

define('TAX',1.1);
$tax = "10";
$prise01 = "100";
$prise02 = "200";
echo "現在、消費税は{$tax}％です。<br />";
echo "<br />";
echo "鉛筆が{$prise01}円で税込".$prise01*TAX."円です。<br />";
echo "<br />";
echo "消しゴムが{$prise02}円で税込".$prise02*TAX."円です。";

?>
</body>
</html>
