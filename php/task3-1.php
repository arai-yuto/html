<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" ccontent="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson2-2</title>
  <style>
      table {
        border-collapse: collapse;
      }
      th{
        border: solid 1px black;
        text-align: center;
        padding: 3px;
        width: 100px
      }
      td {
        border: solid 1px black;
        text-align: center;
      }
    </style>
</head>
<body>

<?php
$dz_1 = 110*12;
$dz_2 = 220*12;
$dz_3 = $dz_1."円";
$dz_4 = $dz_2."円";

$my_title = array(
    array("商品", "価格", "税込価格","1Dzの価格")
);
$my_array = array(
    array("鉛筆", "100円", "110円",$dz_3),
    array("消しゴム", "200円", "220円",$dz_4),
);
echo "<table>";
foreach ($my_title as $row) {
  echo "<tr>";
  foreach ($row as $cell) {
      echo "<th>" . $cell . "</th>";
  }
}
foreach ($my_array as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>" . $cell . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
