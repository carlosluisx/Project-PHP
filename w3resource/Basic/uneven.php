<?php 
// prime number is one that is only divisible by itself and 1

// every number is prime until the contrary is said
$primes=array();
$isprime=false;

for($i=2;$i<=100;$i++){
$isprime=true;
	for($j=2;$j<=($i/2);$j++){
		if($i%$j==0){			
			$isprime=false;	
			break;					
		}
	}
	if($isprime) {
		array_push($primes,$i);
	}
}
print_r($primes);

 ?>