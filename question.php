<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php
//POST送信で送られてきた名前を受け取って変数を作成9
$your_name = $_GET['your-name'];
//①画像を参考に問題文の選択肢の配列を作成してください。

//② ①で作成した、配列から正解の選択肢の変数を作成してください

?>
<p>お疲れ様です<?php echo $your_name; ?><!--POST通信で送られてきた名前を出力-->さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="get">
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
$num = ["80","22","20","21"];
foreach ($num as $value){
    ?>
    <input type="radio" name="number" value="<?php echo $value ?>">
    <?php echo $value ?>
<?php } ?>
<input type="hidden" name="num" value="<?php echo $num[0] ?>">


<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
$lang = ["PHP","Python","JAVA","HTML"];
foreach ($lang as $value){
    ?>
    <input type="radio" name="language" value="<?php echo $value ?>">
    <?php echo $value ?>
<?php } ?>
<input type="hidden" name="lang" value="<?php echo $lang[3] ?>">
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
$com = ["join","select","insert","update"];
foreach ($com as $value){
    ?>
    <input type="radio" name="command" value="<?php echo $value ?>">
    <?php echo $value ?>
<?php } ?>
<input type="hidden" name="com" value="<?php echo $com[1] ?>">

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->

      <div>
     <input type="hidden" name="your-name" value="<?php echo $your_name; ?>">
     
      <input type="submit" class="button" value="回答する">
    </div>
    </form>

</body>
</html>