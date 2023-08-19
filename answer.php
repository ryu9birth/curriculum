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

//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$your_name = $_GET["your-name"];
$answers = explode("@",$_GET["answer"]);
$selects = [];
for($i = 0; $i <3; $i++){
    $selects[] = $_GET["q".$i];
}
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function judgment($select, $answer){
    if($select == $answer){
        echo "正解";
    }else{
        echo "残念";
    }
}
?>
<p><!--POST通信で送られてきた名前を表示--><?php echo $your_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php judgement($selects[0], $answers[0]) ?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php judgement($selects[1], $answers[1]) ?>
?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php judgement($selects[2], $answers[2]) ?>
</body>
</html>