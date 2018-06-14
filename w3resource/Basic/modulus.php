<?php 
//40. Write a PHP program to calculate the mod of two given integers without using any inbuilt modulus operator.

function without_mod($m, $n)
{
   $divides=(int)($m/$n);
   return $m-$n*$divides;
}