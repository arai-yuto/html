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
// 親クラス
  class Staff {
    protected $id; //社員番号
    protected $name; // 名前
    protected $age; // 年齢
    protected $sex; //性別
    protected static $i = 1;

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
      printf('(S%04d) %s %d歳 %s</br>', $this -> id, $this -> name, $this -> age, $this -> sex);
    }
}
// 子クラス
class PartStaff extends Staff {
    private $jikyu; // 時給

    public function __construct($name, $age, $sex, $jikyu) {
        parent::__construct($name, $age, $sex); // 親クラスのコンストラクタを呼び出す
        $this -> jikyu = $jikyu;
    }

        public function show(){
      printf('(S%04d) %s %d歳 %s 時給：%d円</br>', $this -> id, $this -> name, $this -> age, $this -> sex, $this -> jikyu);
    }

}

// 社員名簿の作成
$staff = [];
$staff[0] = new Staff("佐藤 一郎",31,"男性");
$staff[1] = new Staff("山田 花子",25,"女性");
$staff[2] = new Staff("鈴木 次郎",27,"男性" );
$staff[3] = new PartStaff("田中 友子", 24,"女性",900);
$staff[4] = new Staff("中村 三郎",27,"男性");

function AllPost(Staff $arai){
  $arai -> tanaka();
  $arai -> show();
}

// 社員情報の表示
foreach($staff as $arai){
  AllPost($arai);
  }

?>
</body>
</html>
