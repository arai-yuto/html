<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" ccontent="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson1</title>
</head>
<body>
 
<script>
    const confirmButton = document.getElementById('confirm-button');
    const submitButton = document.getElementById('submit-button');

    // 入力フィールドが変更されたときにチェック
    function checkFields() {
        const inputs = document.querySelectorAll('input[required]');
        for (const input of inputs) {
            if (!input.value) {
                return false; // 未入力がある場合はfalseを返す
            }
        }
        return true; // すべてのフィールドが埋まっている場合はtrueを返す
    }

    // フィールドが変更されたときにボタンの表示を切り替える
    document.addEventListener('input', () => {
        if (checkFields()) {
            confirmButton.style.display = 'none';
            submitButton.style.display = 'block';
        } else {
            confirmButton.style.display = 'block';
            submitButton.style.display = 'none';
        }
    });
</script>
</body>
</html>
