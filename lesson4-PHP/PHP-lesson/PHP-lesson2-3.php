    
    <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2-5</title>
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

    /*。

     ブラックジャックのプログラムを作成し、相手、自分の点数を表示し、勝敗を出力して下さい。
     カードの追加はなしとし、自分と相手にランダムで２枚ずつのカードを配布し、勝敗を判定します。
     ****ルール****
     「カードの合計が21点」に近ければ勝利となります。
     ただし「カードの合計が21点」を超えてしまうと、その時点で負けとなります。
 
     【カードの数え方】
     ”2～9”まではそのままの数字、”10・J・Q・K”は「すべて10点」と数えます。
     また、”A”（エース）は「1点」もしくは「11点」のどちらに数えても構いません。
 
     【特別な役】
     最初に配られた2枚のカードが　”Aと10点札”　で21点が完成していた場合を『ブラックジャック』といい、その時点で勝ちとなります。
 
     [出力例]
     自分：18点　対戦相手：17点 　勝敗：あなたの勝ちです。
     自分：21点　対戦相手：20点　勝敗：ブラックジャック！あなたの勝ちです。
     自分：20点　対戦相手：20点　勝敗：引き分けです。
    */
    /*
        ブラックジャックのプログラム
        - 自分と相手にランダムで2枚ずつカードを配布
        - 21点を超えた場合は即負け
        - 21点に近いほうが勝ち
        - 「A（エース）」は1点または11点として計算
        - 最初の2枚が「Aと10点札」ならブラックジャック（即勝利）
    */

    // カードの点数を取得する関数
    if (!function_exists('getCardValue')) {
        function getCardValue($card, &$aceCount) {
            if ($card == "A") {
                $aceCount++; // Aの枚数をカウント
                return 11; // 初期値は11として扱う
            } elseif (in_array($card, ["J", "Q", "K", 10])) {
                return 10;
            } else {
                return $card;
            }
        }
    }

    // プレイヤーのスコアを計算する関数
    if (!function_exists('calculateScore')) {
        function calculateScore($cards) {
            $total = 0;
            $aceCount = 0;
            foreach ($cards as $card) {
                $total += getCardValue($card, $aceCount);
            }
            // Aの調整（合計が21を超える場合、Aを1点としてカウント）
            while ($total > 21 && $aceCount > 0) {
                $total -= 10; // 11点でカウントしたAを1点にする（-10する）
                $aceCount--;
            }
            return $total;
        }
    }

    // ブラックジャックのゲーム処理
    if (!function_exists('blackJack')) {
        function blackJack() {
            // カードデッキ（マークは考慮しない）
            $cards = ["A", "J", "Q", "K", 2, 3, 4, 5, 6, 7, 8, 9, 10];

            // 自分と相手にランダムで2枚のカードを配布
            $player = [ $cards[array_rand($cards)], $cards[array_rand($cards)] ];
            $opponent = [ $cards[array_rand($cards)], $cards[array_rand($cards)] ];

            // 点数計算
            $playerScore = calculateScore($player);
            $opponentScore = calculateScore($opponent);

            // 出力
            echo "自分のカード: " . implode(", ", $player) . "（{$playerScore}点）<br>";
            echo "対戦相手のカード: " . implode(", ", $opponent) . "（{$opponentScore}点）<br>";

            // ブラックジャック判定
            $playerBlackjack = (count($player) == 2 && $playerScore == 21);
            $opponentBlackjack = (count($opponent) == 2 && $opponentScore == 21);

            if ($playerBlackjack && $opponentBlackjack) {
                echo "勝敗：引き分けです。<br>";
            } elseif ($playerBlackjack) {
                echo "勝敗：ブラックジャック！あなたの勝ちです。<br>";
            } elseif ($opponentBlackjack) {
                echo "勝敗：ブラックジャック！相手の勝ちです。<br>";
            } elseif ($playerScore > 21) {
                echo "勝敗：あなたの負けです。（バースト）<br>";
            } elseif ($opponentScore > 21) {
                echo "勝敗：あなたの勝ちです。（相手がバースト）<br>";
            } elseif ($playerScore > $opponentScore) {
                echo "勝敗：あなたの勝ちです。<br>";
            } elseif ($playerScore < $opponentScore) {
                echo "勝敗：あなたの負けです。<br>";
            } else {
                echo "勝敗：引き分けです。<br>";
            }
        }
    }

    // ブラックジャックを実行
    blackJack();
?>

</div>
</body>
</html>
