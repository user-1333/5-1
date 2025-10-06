<?php
$num = [45,50,55];

foreach ($num as $i) {
    if ($i<50) {
        echo "{$i}は50よりも小さい\n";
    }elseif ($i==50) {
        echo "{$i}は50です。\n";
    }else{
        echo "{$i}は50よりも大きい。";
    }
}

// result
// > 45は50よりも小さい
// > 50は50です。
// > 55は50よりも大きい。