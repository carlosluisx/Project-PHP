<?php
//convert source code into array
$html = file('https://dolartoday.com/category/cotizacion/');
$price_line=array();
foreach($html as $linenum => $line){
    if(strpos(htmlspecialchars($line), "Dolar Paralelo hoy")){        
        $price_line[]=htmlspecialchars($line);        
    }
}
$dollar_prices=array();
foreach($price_line as $text){
    preg_match("/Bs. ([1-9]\d{0,6}(,\d{2})*)/", $text, $price);
    $dollar_prices[]=$price;

}
$today_price=$dollar_prices[0][0];

?>

