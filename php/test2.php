<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 function checkFields() {
    const inputs = document.querySelectorAll('input[required]');
    for (const input of inputs) {
        if (!input.value) {
            return false; // 未入力がある場合はfalseを返す
        }
    }
    return true; // すべてのフィールドが埋まっている場合はtrueを返す
}
?>
</body>
</html>