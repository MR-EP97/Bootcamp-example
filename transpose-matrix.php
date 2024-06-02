<?php 
$matrix = [];
for ($i=0;$i<3;$i++){
    for ($j=0;$j<3;$j++){
        $matrix[$i][$j] = readline("Enter Input $i $j : ");
    }
}

$transMatrix = [];

for ($i=2;$i>=0;$i--) {
    for ($j=2;$j>=0;$j--) {
        $transMatrix[$i][$j] = $matrix[$i][$j];
    }
}

for ($i=0;$i<3;$i++){
    for ($j=0;$j<3;$j++){
        echo "Transpose Matrix: $i $j = ".$matrix[$i][$j] ."\n";
    }
}