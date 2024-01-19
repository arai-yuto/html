<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" ccontent="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson2-1</title>
</head>
<body>
  
<?php
$week = array("日曜日", "月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日");
echo "<ul>";
foreach ($week as $day) {
    echo "<li>" . $day . "</li>";
}
echo "</ul>";
?>
</body>
</html>
