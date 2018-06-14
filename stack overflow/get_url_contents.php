<?php 
function get_url_contents($url){  
  if (function_exists('file_get_contents')) {  
    $result = @file_get_contents($url);  
  }  
  if ($result == '') {  
    $ch = curl_init();  
    $timeout = 30;  
    curl_setopt($ch, CURLOPT_URL, $url);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);  
    $result = curl_exec($ch);  
    curl_close($ch);  
  }  

  return $result;  
}
function get_url_source($url){
  $c = curl_init($url);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
//curl_setopt(... other options you want...)

$html = curl_exec($c);

if (curl_error($c))
    die(curl_error($c));

// Get the status code
  $status = curl_getinfo($c, CURLINFO_HTTP_CODE);
  return $status;
  curl_close($c);
  }
?>