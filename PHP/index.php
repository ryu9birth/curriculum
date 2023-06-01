<?php


$products = ["鉛筆" =>"100","消しゴム" => "150","物差し" => "500"];


function tax($price){
    $taxincloud = $price + ($price * 0.1);
}
foreach ($products as $key => $price){
 
    echo $key."の税込み価格は".$taxincloud."円です";
    echo '<br>';
}



?>


