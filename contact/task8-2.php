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
        <h1>送信完了しました。</h1>
    </div>
 </div>
 <div class="box_con02">
  <form method="post" action="task8-1.php">
    <table class="formTable">
    
      <tr>
        <th>お名前<span>必須</span></th>
        <td><input size="20" type="text" class="wide" name="name" /></td>
      </tr>
      <tr>
        <th>ふりがな<span>必須</span></th>
        <td><input size="20" type="text" class="wide" name="kana" /></td>
      </tr>
      <tr>
        <th>電話番号<span>必須</span></th>
        <td><input size="30" type="text" class="wide" name="call" /></td>
      </tr>
      <tr>
        <th>メールアドレス<span>必須</span></th>
        <td><input size="30" type="text" class="wide" name="Email" /></td>
      </tr>
      <tr>
      <th>お問い合わせ項目<span>必須</span></th>
      <td><select name="goyouken">
          <option value="">選択してください</option>
          <option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option>
          <option value="リンクについて">リンクについて</option>
        </select></td>
      </tr>
      <tr>
          <th>お問い合わせ内容<span>必須</span><br /></th>
          <td><textarea name="naiyou" cols="50" rows="5"></textarea></td>
      </tr>
      <tr>
        <th>個人情報保護方針<span>必須</span><br /></th>
        <td><input type="checkbox" name="protect" aria-invalid="false" class="agree"><span class="check"><a href="file:///c%3A/Users/kakpa/OneDrive/%E8%AA%B2%E9%A1%8C/%E8%AA%B2%E9%A1%8C31/index31.html"
          class="head_btn">個人情報保護方針</a>に同意します。</span></td>
        </tr>
    </table>
    <p class="btnn">
      <span><input type="submit" value="確認" /></span>
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