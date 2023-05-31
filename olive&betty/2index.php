<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="平井と葛西を拠点としたキッズダンス、シニアダンスのサークル">
    <title>OLIVE&BETTY-お問合せ</title>
    <link rel="stylesheet" href="http://unpkg.com/ress/dist/ress.min.css">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="oli.style.css">
</head>
<body>
<div id="home" class="big-bg">
    <header class="page-header wrapper">
        <h1><a href="index.html"><img class="logo" src="images/logo.jpg" alt="OLIVE$BETTY"></a></h1>
        <nav>

            <ul class="main-nav">
                <li><a href="oli.html">OLIVE平井</a></li>
                <li><a href="bet.html">BETTY葛西</a></li>
                <li><a href="sen.html">シニアダンス</a></li>
                <li><a href="con.html">お問合せ</a></li>
            </ul>
        </nav>
    </header>
    <div class="wrapper">
        <h2 class="page-title">CONTACT</h2>
<?php
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$to = 'ryu9birth@outlook.jp';
$name = $_POST['your-name'];
$email = $_POST['your-email'];
$messege = $_POST['your-messege'];
$headers = "From: ryu9birth@gmail.com";



if(mb_send_mail($to, $name, $email, $messege,$headers))

        {
            echo '<p style="font-size:1.5rem;">メール送信成功です</p>';
        }
        else
        {
            echo '<p style="font-size:1.5rem;">メール送信失敗です</p>';
        }
    ?>
   
</body>
</html>

