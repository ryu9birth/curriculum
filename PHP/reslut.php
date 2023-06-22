
<?php

  //②フォームからのデータを受け取ります

  $my_name = $_GET['my_name'];
  $number = $_GET['number'];
  //③受け取った数字に1~6までのランダムな数字を掛け合わせて
  //変数に入れてください

$key = $number * mt_rand(1,6);
  //④掛け合わせた数字の結果によっておみくじを選び、変数に入れます
if(1<= $key && $key <= 10){
  $omikuji = "凶";
}elseif(11<= $key && $key <= 15){
  $omikuji = "小吉";
}elseif(16<= $key && $key <= 20){
  $omikuji = "中吉";
}elseif(21<= $key && $key <= 25){
  $omikuji = "吉";
}elseif(26<= $key && $key <= 36){
  $omikuji = "大吉";
}else{
  $omikuji = "残念";
}

$today = date("Y-m-d H:i:s");

  //⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう

 echo $today;
 echo "<br>";
 echo "名前は".$my_name."です。";
 echo "<br>";
 echo "番号は".$number."です。";
 echo "<br>";
 echo "結果は".$omikuji."です。";
 ?>