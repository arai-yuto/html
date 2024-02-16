<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" ccontent="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson7-2</title>
</head>
<body>
<?php
class Staff {
    public $id; // 社員番号
    public $name; // 名前
    public $sex; // 性別
    public $age; // 年齢

    public function __construct($id, $name, $sex, $age) {
        $this->id = $id;
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
    }
}

class PartStaff extends Staff {
    public $jikyu; // 時給

    public function __construct($id, $name, $age, $sex, $jikyu) {
        parent::__construct($id, $name, $age, $sex); // 親クラスのコンストラクタを呼び出す
        $this->jikyu = $jikyu;
    }

    public function getDetails() {
        return "{$this->id} {$this->name} {$this->age}歳 {$this->sex} {$this->jikyu} ";
    }
}

// 社員名簿の作成
$staff1 = new PartStaff("S0001", "佐藤 一郎", "男性", 31 , "" );
$staff2 = new PartStaff("S0002", "山田 花子", "女性", 25 , "" );
$staff3 = new PartStaff("S0003", "鈴木 次郎", "男性", 27 , "" );
$staff4 = new PartStaff("P0004", "田中 友子", "女性", 24,  "時給：900円");
$staff5 = new PartStaff("S0005", "中村 三郎", "男性", 27,  "");

// 社員情報の表示
echo $staff1->getDetails() . "</br>";
echo $staff2->getDetails() . "</br>";
echo $staff3->getDetails() . "</br>";
echo $staff4->getDetails() . "</br>";
echo $staff5->getDetails() . "</br>";
?>
</body>
</html>
