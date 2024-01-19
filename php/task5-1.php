<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" ccontent="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson1-2-2</title>
</head>
<body>
  <h1>九九の計算</h1>
<!-- 九九表の出力 -->
<table>
    <!-- 各段を繰り返し出力 -->
    <?php for($i = 1; $i <= 9; $i++){ ?>
      <tr>
        <!-- 各段の一つ一つのマスを繰り返し出力 -->
        <?php for($j = 1; $j <= 9; $j++){ ?>
          <td><?php echo $i; ?> ✕ <?php echo $j; ?> = <?php echo $i * $j; ?></td>
        <?php } ?>
      </tr>
    <?php } ?>
  </table>
</body>
</html>