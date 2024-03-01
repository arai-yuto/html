<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
    //セッションを開始します。
    session_start();
      
    //基本的に以下は、HTMLのフォームから送信ボタンが押された後の処理です。
    //送信ボタンが押されるとurlパラメータに?type=confirmationがつきます。
    //そのURLパラメータを取得できたら、処理に移ります。
      
    //GETでURLを取得
    $url = $_GET["type"];
      
    //$_SESSION["sendkey"]がtrueになっていれば、最後の画面で送信可能に。
    $_SESSION["sendkey"] = "false";
      
    //もし$urlパラメータにconfirmationが入っていたら実行。
    if($url == "confirmation"){
          
        //セッションにポストされたデータを保管。
        $_SESSION["mailarea"] = htmlspecialchars($_POST['mailarea'], ENT_QUOTES);
        $_SESSION["namedata"] = htmlspecialchars($_POST['namedata'], ENT_QUOTES);
        $_SESSION["textboxdata"] = htmlspecialchars($_POST['textboxdata'], ENT_QUOTES);
          
        //エラーがあった時のメッセージが入ります。
        $mailareaErrorMessege = "";
        $namedataErrorMessege = "";
          
        //以下、バリデーションチェックに入ります。
        if(empty($_SESSION["mailarea"])){
            //$_SESSION["mailarea"]が空だったら$mailareaErrorMessegeにエラーメッセージを入力。
            $mailareaErrorMessege = "メールアドレスが入力されていません。";
        }elseif(!preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/iD', $_SESSION["mailarea"])){
            //$_SESSION["mailarea"]の内容がメールアドレスじゃなかったらエラーメッセージを入力。
            $mailareaErrorMessege = "メールアドレスの形式が間違っています。";
        };
          
        if(empty($_SESSION["namedata"])){
            //名前が入力されてなければnamedataErrorMessegeにエラーメッセージを入力。
            $namedataErrorMessege = "お名前が入力されていません。";
        };
          
        if(empty($mailareaErrorMessege)&&empty($namedataErrorMessege)){
            //エラーメッセージが存在しなければ「確認ページ」にリダイレクト。
            header('Location: confirmation.php');
            exit;
        };  
    };
?>
</body>
</html>