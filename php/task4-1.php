<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" ccontent="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson1-1</title>
</head>
<body>

<?php
// 乱数を生成
$random_number = rand(1, 100);

// 運勢を設定
if ($random_number <= 5) {
    $fortune = "大凶";
} elseif ($random_number <= 20) {
    $fortune = "凶";
} elseif ($random_number <= 50) {
    $fortune = "吉";
} elseif ($random_number <= 80) {
    $fortune = "中吉";
} else {
    $fortune = "大吉";
}

// 結果を出力
echo "<b>今日の運勢は”" . $fortune . "”です。</b>"; 
?>
</body>
</html>