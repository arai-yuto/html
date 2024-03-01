<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form Validation</title>
    <style>
        .error {
            color: red;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
// フォームが送信されたときの処理
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    // 必須項目のチェック
    if (empty($name) || empty($email)) {
        echo "<div class='error'>必須項目を入力してください。</div>";
    } else {
        // ここでデータベースへの保存などの処理を行う
        echo "データが正常に送信されました。";
    }
}
?>

</body>
</html>