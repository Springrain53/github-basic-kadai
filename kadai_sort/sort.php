
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>
    <body>
        <p>
            <?php

                //振り分け関数
                function sort_2way($array,$order){
                
                    if($order){
                    sort_function($array);
                    }else{
                    rsort_function($array);
                    }
                }
                
                //昇順の関数
                function sort_function($array) {
                    //昇順に並べる
                    echo "昇順にソートします";
                    echo "<br/>";
                    sort($array);
  
                    foreach($array as $result){
                      echo $result;
                      echo "<br/>";
                    }            
                  }
  
                  //降順の関数 
                  function rsort_function($array) {
                    echo "降順にソートします";
                    echo "<br/>";
                    //降順に並べる
                    rsort($array);
  
                    foreach($array as $result){
                      echo $result;
                      echo "<br/>";
                    }
                  }
                //TRUEを入力FULSE
                $nums = [15, 4, 18, 23, 10 ];     
                
                //関数の呼び出し           
                sort_2way($nums,TRUE);
                sort_2way($nums,FALSE);               

            ?>
        </p>
    
    </body>
</html>