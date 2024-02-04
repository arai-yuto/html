<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson7-1</title>
</head>

<body>

  <?php
  class Staff {
    public $id; //社員番号
    public $name; // 名前
    public $age; // 年齢
    public $sex; //性別
}
// Staffのインスタンスを作成
$staff1 = new Staff();
$staff2 = new Staff();
$staff3 = new staff();

// スタッフ1の情報を設定
$staff1->id = "(S0001)";
$staff1->name = "佐藤 一郎";
$staff1->age = 31;
$staff1->sex = "男性";

// スタッフ2の情報を設定
$staff2->id = "(S0002)";
$staff2->name = "山田 花子";
$staff2->age = 25;
$staff2->sex = "女性";

// スタッフ3の情報を設定
$staff3->id = "(S0003)";
$staff3->name = "鈴木 次郎";
$staff3->age = 27;
$staff3->sex = "男性";

// スタッフの情報を表示
echo "{$staff1->id} {$staff1->name} {$staff1->age}歳 {$staff1->sex}</br>";
echo "{$staff2->id} {$staff2->name} {$staff2->age}歳 {$staff2->sex}</br>";
echo "{$staff3->id} {$staff3->name} {$staff3->age}歳 {$staff3->sex}</br>";

  ?>
</body>
</html>