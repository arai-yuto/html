<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" ccontent="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson5-2</title>
  </head>

  <body>
     <?php
      // 1週間の日付を表す配列を作成
      $week = array("日曜日", "月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日");
      
      
      // 配列の要素を順番に取り出して、箇条書きに表示
      $i = 0;
      while ($i < count($week)) {
      echo "<li>{$week[$i]}</li>";
      $i++;
    }
      ?>

  </body>
</html>
