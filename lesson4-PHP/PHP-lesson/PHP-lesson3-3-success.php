<?php

?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-lesson3</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .button {
        display: inline-block;
        padding: 10px 20px;
        color: #fff;
        background-color: #007BFF;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s;
    }
    .button:hover {
        background-color: #0056b3;
    }
</style>
<body>
    <div class="header">
        <div class="header-left">Koyasu-portfolio</div>
        
        <div class="header-right">
            <ul class="list">
                <li>home</li>
                <li>portfolio</li>
                <li class="nowpage">contact</li>
            </ul>
        </div>
    </div>

    <div class="main">
        <div class="contact-form">
            <div class="form-title">お問い合わせが完了しました</div>
            <a href="PHP-lesson3-1-form.php" class="button">お問い合わせフォーム画面に戻る</a>
        </div>
    </div>

    <div class="footer">
        <div class="footer-left">
            <ul class="list">
                <li>home</li>
                <li>portfolio</li>
                <li class="nowpage">contact</li>
            </ul>
        </div>
    </div>
</body>
</html>