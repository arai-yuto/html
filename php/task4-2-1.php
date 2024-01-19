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
switch ($random_number) {
    case 1:
    case 2:
    case 12:
        $season = "冬";
        break;
    case 3:
    case 4:
    case 5:
        $season = "春";
        break;
    case 6:
    case 7:
    case 8:
        $season = "夏";
        break;
    case 9:
    case 10:
    case 11:
        $season = "秋";
        break;
}

// 結果を出力
echo "「".$random_number . "月は" . $season . "の季節です。」";
?>