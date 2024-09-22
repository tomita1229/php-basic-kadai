<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>PHP基礎編</title>
</head>
<body>
    <p>
    <?php
    // "food"
    // クラスを定義する
    class Food {
        // プロパティを定義する
        private $name;
        private $price;

        // priceを表示するメソッド
        public function show_price() {
            echo $this->price;
        }

        // コンストラクタを定義する
        public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
        }
    }

    // インスタンス化
    $food = new Food('potato', 250);

    // "animal"
    class Animal {
        private $name;
        private $height;
        private $weight;

        // heightを表示するメソッド
        public function show_height() {
            echo $this->height;
        }
        
        // コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }
    }

    $animal = new Animal('dog', 60, 5000);

    // show_priceメソッドとshow_heightメソッドにそれぞれアクセスして実行する
    echo '<br>';
    $food->show_price();

    echo '<br>';
    $animal->show_height();
    ?> 
    </p>
</body>
</html>
