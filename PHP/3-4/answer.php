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
$your_name = $_GET['your-name'];
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

?>
<p><!--POST通信で送られてきた名前を表示--><?php echo $your_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php $num = $_GET['num'];
?>
<?php $number = $_GET['number'];
?>
<?php 
if ($number == $num){
    echo '正解！';
}else{
    echo '残念・・・';
}
?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php $lang = $_GET['lang'];
?>
<?php $language = $_GET['language'];
?>
<?php 
if ($language == $lang){
    echo '正解！';
}else{
    echo '残念・・・';
}

?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php $com = $_GET['com'];
?>
<?php $command = $_GET['command'];
?>
<?php
if ($command == $com){
    echo '正解！';
}else{
    echo '残念・・・';
}
?>
</body>
</html>