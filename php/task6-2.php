<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
function maxnum($a, $b) {
  if ($b < $a) {
    return $a;
  }
  else {
    return $b;
  }
  }
  $a = 9;
  $b = 21;
  printf('$a = 9<br>');
  printf('$b = 21<br>');
  printf('$aと$bのうち最大値は%dです。<br>', maxnum($a,$b));
  ?>
</body>
</html>