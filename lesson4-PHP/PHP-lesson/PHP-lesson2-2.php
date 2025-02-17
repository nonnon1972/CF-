<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2-2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="m-5">
<button onclick="history.back()">chapter4メニュー画面に戻る</button>


    <?php
    /*
      課題：
        - 以下のコメントに従いコードを記述してください！
            ※各設問の回答の最後には改行を入れましょう。
            <br>タグをHTMLとして出力することで改行ができます。
        - このファイルをWebブラウザで開き、問題が無ければ保存して、このファイルを提出してください。
        dockerのlesoon4-phpコンテナを起動　→　http://localhost:8000/　にアクセス　→　該当のリンクをクリック　→　結果を確認
    */
    /*  
       お釣りの計算プログラムを作成して下さい。
        所持金は2万円札とし、1円以上の任意の値段を設定した商品を購入した際のおつり（内訳）を
        出力して下さい。
        使用するお金は五千円札、千円札、500円玉、100円玉、50円玉、10円玉、5円玉、1円玉、とします。
    
        出力例
        商品の値段：4000円

        おつり内訳
        五千円札　１枚
        千円札　１枚
    */

    //この下に記述してください
    // 商品の価格（例: 4000円）
    $product_price = 4000;

    // 所持金（2万円）
    $money = 20000;

    // お釣りを計算
    $change = $money - $product_price;

    echo "商品の値段：{$product_price}円<br><br>";
    echo "おつり内訳<br>";

    // 紙幣・硬貨の種類（大きい順）
    $bills = [
        "五千円札" => 5000,
        "千円札" => 1000,
        "500円玉" => 500,
        "100円玉" => 100,
        "50円玉" => 50,
        "10円玉" => 10,
        "5円玉" => 5,
        "1円玉" => 1
    ];

    // 各紙幣・硬貨の枚数を計算
    foreach ($bills as $name => $value) {
        if ($change >= $value) {
            $count = floor($change / $value); // 何枚必要か計算
            $change -= $count * $value; // お釣りから引く
            echo "{$name}　{$count}枚<br>";
        }
    }

    
?>
<div>
</body>
</html>