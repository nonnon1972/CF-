<?php 
// ここに処理を記載

$name = isset($_POST["name"]) ? htmlspecialchars($_POST["name"], ENT_QUOTES, "UTF-8") : '';
$mail = isset($_POST["mail"]) ? htmlspecialchars($_POST["mail"], ENT_QUOTES, "UTF-8") : '';
$phone = isset($_POST["phone"]) ? htmlspecialchars($_POST["phone"], ENT_QUOTES, "UTF-8") : '';
$body = isset($_POST['body']) ? htmlspecialchars($_POST['body'], ENT_QUOTES, "UTF-8") : '';


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confilm</title>
    <link rel="stylesheet" href="style.css">
</head>
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
            <div class="form-title">お問い合わせ確認</div>
            <!-- この下にformタグでformの外側を作成 -->
            <form action="PHP-lesson3-3-success.php" method="post" >
                <div class="form-item">名前</div>
                

                <div class="form-item">メールアドレス</div>
                

                <div class="form-item">電話番号</div>
               
                
                <div class="form-item">内容</div>
      
              
                <div class="check">
                    <p class="btn">
                        <span> 
                            <input type="submit" value="送信" onClick="">
                        </span>
                    </p>
                </div>
            </form>
            <form method="post" action="PHP-lesson3-1-form.php">
                <div class="box_check">
                    <p class="btn">
                        <span>
                            <input type="submit" value="戻る" onClick="" >
                        </span>
                    </p>
                </div>
            </form>
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