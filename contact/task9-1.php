<?php
try {
  $pdo = new PDO(
    'mysql:host=localhost;dbname=consumer;charset=utf8mb4',
    'root',
    'root',
    [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
  );

  // $pdo->query("DROP TABLE IF EXISTS contact");
  // $pdo->query(
  //   "CREATE TABLE contact(
  //     id    INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  //     name  VARCHAR(128),
  //     kana  VARCHAR(128),
  //     phone VARCHAR(64),
  //     Email VARCHAR(64),
  //     goyouken VARCHAR(128),
  //     naiyou TEXT
  //      )"
  //   );

  $name = $_POST["name"];
  $kana = $_POST["kana"];
  $phone = $_POST["phone"];
  $Email = $_POST["Email"];
  $goyouken = $_POST["goyouken"];
  $naiyou = $_POST["naiyou"];

  $stmt = $pdo->prepare("INSERT INTO contact  VALUES (0, ?, ?, ?, ?, ?, ?)");
  $stmt -> bindParam(1,$name,PDO::PARAM_STR);
  $stmt -> bindParam(2,$kana,PDO::PARAM_STR);
  $stmt -> bindParam(3,$phone,PDO::PARAM_STR);
  $stmt -> bindParam(4,$Email,PDO::PARAM_STR);
  $stmt -> bindParam(5,$goyouken,PDO::PARAM_STR);
  $stmt -> bindParam(6,$naiyou,PDO::PARAM_STR);

  $stmt->execute();
  var_dump($name);
  var_dump($phone);

$stmt = $pdo-> query("SELECT * FROM contact");
$results = $stmt->fetchAll();
// print_r($result);
var_dump($result);

} catch (PDOException $e) {
  echo $e->getMessage() . '<br>';
  exit;
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="stylesheet31.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <header>
    <div class="header">
      <h2>ここには会社名が入ります</h2>
    </div>
  <div class="btn">
      <div class="btn_01">
        <a href="../" class="head1_btn">ボタン01</a>
      </div>
      <div class="btn_02">
        <a href="file:///c%3A/Users/kakpa/OneDrive/%E8%AA%B2%E9%A1%8C/%E8%AA%B2%E9%A1%8C30/index30.html" class="head1_btn">ボタン02</a>
      </div>
  </div>
  </header>

  <div class="sec_01">
    <p>メニュー01</p>
    <p>メニュー02</p>
    <p>メニュー03</p>
 </div>
 <div class="mv">
    <img src="mv.png" alt="homepage">
 </div>
 <div class="sec_02">
    <div class="sec_02-1">
      <h1>お問い合わせ</h1>
     </div>
      <div class="sec_02-2">
        <p>お問い合わせや業務内容に関するご質問は、電話またはこちらのお問い合わせフォームより承っております。</p>
        <p>後ほど担当よりご連絡させていただきます。</p><br><br><br>
        <?= "<font color='blue'><h1>送信完了しました。</h1></font>"; ?>
    </div>
 </div>
 
<div class="sec_06">
  <div class="text_05-1">
    <h2>こちらからご購入ください</h2>
    <p>ネットショップ</p>
  </div>
  <div class="text_05-2">
    <h2>お気軽にお問い合わせください</h2>
    <p>お問い合わせ</p>
  </div>
</div>

<div class="sec_07">
  <h4>ここには会社名が入ります</h4>
  <p> 住所が入ります</p>
  <p>03-1234-5678</p>
  <div class="sec_07-1">
  <p>営業時間：9：00～18：00</p>
  </div>
</div>

<div class="sec_08">
  <p>リンク01</p>
  <p>リンク02</p>
  <p>リンク03</p>
  <p>リンク04</p>
  <p>リンク05</p>
  <div class="sec_08-1">
    <p>リンク06</p>
    <p>リンク07</p>
  </div>
</div>

<div class="sec_09">
  <p>ここには会社名が入ります©Copyright.</p>
</div>
</body>
</html>