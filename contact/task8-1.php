<?php 
$name = $_POST["name"];
$kana = $_POST["kana"];
$phone = $_POST["phone"];
$Email = $_POST["Email"];
$goyouken = $_POST["goyouken"];
$naiyou = $_POST["naiyou"];
$protect = $_POST["protect"];
var_dump($name);
var_dump($phone);
var_dump($goyouken);
var_dump($protect);
$g = 1;
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
        <a href="../" class="head1_btn">ボタン02</a>
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
        <p>後ほど担当よりご連絡させていただきます。</p>
        </div>    
    <?php
        if (empty($name)) {
          echo "</br><font color='red'>※「お名前」は必須項目です。忘れずに入力してください。</font></br>";
          $g = 0;
        }  
        if (empty($kana)) {
          echo "</br><font color='red'>※「ふりがな」は必須項目です。忘れずに入力してください。</font></br>";
          $g = 0;
        }  
        if (empty($phone)) {
            echo "</br><font color='red'>※「電話番号」は必須項目です。忘れずに入力してください。</font></br>";
            $g = 0;
          }
        if (!preg_match('/^\d{10,11}$/', $phone)) {
          echo "<font color='red'>※「電話番号」は10桁または11桁で入力してください。</font></br>";
          $g = 0;
        }  
        if (empty($Email)) {
          echo "</br><font color='red'>※「メールアドレス」は必須項目です。忘れずに入力してください。</font></br>";
          $g = 0;
        }
        if (!preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9.-]+$/", $Email)) {
          echo "<font color='red'>※「メールアドレス」を正しく入力してください。</font></br>";
          $g = 0;
        }  
        if (empty($goyouken)) {
          echo "</br><font color='red'>※「お問い合わせ項目」は必須項目です。忘れずに選択してください。</font></br>";
          $g = 0;
        }
        if (empty($naiyou)) {
          echo "</br><font color='red'>※「お問い合わせ内容」は必須項目です。忘れずに入力してください。</font></br>";
          $g = 0;
        }
        if (!isset($protect)) {
          echo "</br><font color='red'>※「個人情報保護方針」は必須項目です。内容を確認を行い忘れずにチェックしてください。</font></br>";
          $g = 0;
        }
        ?>
  </div>
     <div class="box_con02">
     <form method="post" action="<?php if ($g == 1) {
      echo "task9-1.php";
     } else {
      echo "task8-1.php";
     }
      ?>">
       <table class="formTable">
      <tr>
        <th>お名前<span>必須</span></th>
        <td><input size="20" type="text" class="wide" name="name" value = "<?= $name ?>"></td>
      </tr>
      <tr>
        <th>ふりがな<span>必須</span></th>
        <td><input size="20" type="text" class="wide" name="kana" value = "<?= $kana ?>"></td>
      </tr>
      <tr>
        <th>電話番号<span>必須</span></th>
        <td><input size="30" type="text" class="wide" name="phone" value = "<?= $phone ?>"></td>
      </tr>
      <tr>
        <th>メールアドレス<span>必須</span></th>
        <td><input size="30" type="text" class="wide" name="Email" value = "<?= $Email ?>"></td>
      </tr>
      <tr>
      <th>お問い合わせ項目<span>必須</span></th>
      <td><select name="goyouken">
          <option value="">選択してください</option>
          <option <?php if ($goyouken == ご質問・お問い合わせ) {
            echo "selected";
          } ?> >ご質問・お問い合わせ</option>
          <option <?php if ($goyouken == リンクについて) {
            echo "selected";
          } ?>
          value="リンクについて">リンクについて</option>
          </select></td>
      </tr>
      <tr>
          <th>お問い合わせ内容<span>必須</span><br /></th>
          <td><textarea name="naiyou" cols="50" rows="5"><?= $naiyou ?></textarea></td>
      </tr>
      <tr>
        <th>個人情報保護方針<span>必須</span><br /></th>
        <td><input type="checkbox" name="protect" aria-invalid="false" class="agree"  <?php if($protect == 'on'){echo 'checked';} ?>><span class="check"><a href="../"
          class="head_btn">個人情報保護方針</a>に同意します。</span></td>
        </tr>
    </table>
    <p class="btnn">
      <?php
      if(empty($g)){
        echo '<input type="submit" value="確認"/>';
      }
      else{
        echo '<input type="submit" value="送信"/>';
      }
      ?>
    </p>
  </form>
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