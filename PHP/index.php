<?php

difine("TAX","1.1");

$products = ["鉛筆" =>"100","消しゴム" => "150","物差し" => "500"];


function tax($price){
    $taxincloud = $price * 0.1;

return $key."の税込み価格は".tax($price)."円です";
    
}



?>


