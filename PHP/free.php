
<?php
$taxrate = 0.1;

$products = ["鉛筆" =>"100","消しゴム" => "150","物差し" => "500"];
  foreach ($products as $key => $price){
  
    $tax_included = $price * (1 + $taxrate);
  
echo  $key."の税込み価格は".$tax_included."円です。<br>";
}
?>
