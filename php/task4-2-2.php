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
// 乱数を生成
$random_number = rand(1, 12);

// 四季を設定
if ($random_number <= 3) {
    $season = "冬";
} elseif ($random_number <= 6) {
    $season = "春";
} elseif ($random_number <= 9) {
    $season = "夏";
} else {
    $season = "秋";
}

// 結果を出力
echo "「".$random_number . "月は" . $season . "の季節です。」";
?>