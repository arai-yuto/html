<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" ccontent="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson5-2</title>
  </head>

  <body>
  <?php
//
function showString($str, $num) {
    for ($i=1; $i<=$num; $i++) {
        print("$str </br>");
    }
}
//
showString("気合いだー！", 3);
?>
  </body>
  </html>