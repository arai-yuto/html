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
    private $id; //社員番号
    private $name; // 名前
    private $age; // 年齢
    private $sex; //性別
    private static $i = 1;

    public function __construct($name,$age,$sex){
      $this -> name = $name;
      $this -> age = $age;
      $this -> sex = $sex;
    }
    public function tanaka(){
      $this -> id = self::$i++;
      return $this -> id;
    }
    public function show(){
      printf("(S%04d) %s %d歳 %s</br>", $this -> id, $this -> name, $this -> age, $this -> sex);
    }
}
// Staffのインスタンスを作成
$staff[1] = new Staff("佐藤 一郎",31,"男性");
$staff[2] = new Staff("山田 花子",25,'女性');
$staff[3] = new staff("鈴木 次郎",27,'男性');

// スタッフの情報を表示
foreach($staff as $arai){
$arai -> tanaka();
$arai -> show();
}
  ?>
</body>
</html>