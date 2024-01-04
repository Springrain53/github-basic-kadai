
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>
    <body>
        <p>
            <?php
            class Food {
              public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
              }
          }
          class Animal {
            public function __construct(string $name, int $height, int $weight) {
              $this->name = $name;
              $this->height = $height;
              $this->weight = $weight;
            }
        }          

        $apple = new Food('リンゴ',10);
        $cat = new Animal('マロン',20,30);
        print_r($apple);
        echo '<br>';
        print_r($cat);
            ?>
        </p>
    
    </body>
</html>