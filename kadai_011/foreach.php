
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>
    <body>
        <p>
            <?php
                  $food_data = ["名前" => "玉ねぎ", '値段' => 200, "産地" => "北海道"];
                  foreach($food_data as $key => $value){
                      echo $key . ':' . $value;
                      echo '<br>';
                  }
            ?>
        </p>
    
    </body>
</html>
