<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎 課題</title>
</head>

<body>
    <p>
       <?php
       // 連想配列に値を代入する
       $food_dates = ["名前" => "玉ねぎ", "値段" => 200, "産地" => "北海道"];

       // 配列$food_datesの要素を1つずつ順番に出力する
       foreach ($food_dates as $key => $value) {
            echo "{$key} : $value <br>"; 
       }
       ?>
    </p>
</body>

</html>