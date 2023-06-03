<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
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
                <li><a href="oli.html"><b>OLIVE<br>平井</b></a></li>
                <li><a href="bet.html"><b>BETTY<br>葛西</b></a></li>
                <li><a href="sen.html"><b>シニア<br>ダンス</b></a></li>
                <li><a href="gall.html"><b>GALLERY</b></a></li>
                <li><a href="con.html"><b>お問合せ</b></a></li>
            </ul>
        </nav>
    </header>
    <div class="wrapper">
        <h2 class="page-title">CONTACT</h2>
  <form action="2index.php" method="post">
    <div>
        <h2>＜確認画面＞</h2>

       
        <?php

print "（名前）";
print "<br>";
print $_POST["your-name"];
print "<br>";
print "（メールアドレス）";
print "<br>";
print $_POST["your-email"];
print "<br>";
print "（内容）";
print "<br>";
print $_POST["your-messege"];
        ?>

    </div>

  
  <input type="hidden" name='your-name' value="<?php echo $_POST["your-name"]; ?>">
  <input type="hidden" name='your-email' value="<?php echo $_POST["your-email"]; ?>">
  <input type="hidden" name='your-messege' value="<?php echo $_POST["your-messege"]; ?>">
    <input type="submit" class="button" value="送信">
   
  </form>
    </div>
<footer>
        <div class="wrapper">
            <p><small>&copy; 2023 NATSUMI</small></p>
        </div>
    </footer>
</body>
</html>