<?php
function stringReverse($str): string 
{
    $len = strlen($str);
    $rev = '';

 for($i = $len-1 ; $i >= 0 ;  $i--) {
    $rev .= $str[$i];
 } ;
 return $rev;

}

$text = 'Qad =+ !@4# gf12p3';
$result = stringReverse($text);
echo $result;

