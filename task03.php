<?php
function get_shortest(array $strings) {
    $shortest = null;
    $shortestLength = PHP_INT_MAX;

    foreach ($strings as $string) {
        $length = strlen($string);
        if ($length < $shortestLength) {
            $shortest = $string;
            $shortestLength = $length;
        } elseif ($length == $shortestLength && $shortest === null) {
            $shortest = $string;
        }
    }

    return $shortest;




}
?>