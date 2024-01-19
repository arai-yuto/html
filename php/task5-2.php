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
// 1週間の配列を作成
$week = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
echo "<ul>";
// 箇条書きに表示
$i = 0;
while ($i < count($week)) {
  echo "<li>" . $week . "</li>";
}
echo "</ul>";

?>
</body>
</html>