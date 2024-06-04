<?php

$matrix = [];
$h=0;
for ($i=0;$i<3;$i++){
    for ($j=0;$j<3;$j++){
$h++;
        $matrix[$i][$j] = $h;
    }
}

$transMatrix = [];

for ($i=2;$i>=0;$i--) {
    for ($j=2;$j>=0;$j--) {
        $transMatrix[$j][$i] = $matrix[$i][$j];
    }
}

for ($i=0;$i<3;$i++){
    for ($j=0;$j<3;$j++){
        echo "Matrix: $i $j = ".$matrix[$i][$j] ."\n";
    }
}


for ($i=0;$i<3;$i++){
    for ($j=0;$j<3;$j++){
        echo "Transpose Matrix: $i $j = ".$transMatrix[$i][$j] ."\n";
    }
}