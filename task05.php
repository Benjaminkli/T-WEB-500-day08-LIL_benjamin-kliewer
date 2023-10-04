<?php
function calc_average($numbers) {
    if (count($numbers) === 0) {
        return 0;
    }
    
    $sum = array_sum($numbers);
    $average = $sum / count($numbers);
    $rounded_average = round($average, 1);
    return $rounded_average;
}
?>