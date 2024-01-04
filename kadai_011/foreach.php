
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>
    <body>
        <p>
            <?php
                  $food_data = ["name" => "玉ねぎ", 'price' => 200, "maid" => "北海道"];
                  foreach($food_data as $result){
                      echo $result;
                      echo '<br>';
                  }
            ?>
        </p>
    
    </body>
</html>
