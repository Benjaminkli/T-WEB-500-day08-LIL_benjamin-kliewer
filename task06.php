<?php

function generateNextSequence($sequence) {
    $count = strlen($sequence);
    $result = '';
    $i = 0;

    while ($i < $count) {
        $currentChar = $sequence[$i];
        $countChar = 1;

        while (($i + 1 < $count) && ($sequence[$i] === $sequence[$i + 1])) {
            $countChar++;
            $i++;
        }

        $result .= $countChar . $currentChar;
        $i++;
    }

    return $result;
}

function sequence(int $n) {
    if ($n < 0) {
        return;
    }

    $currentSequence = '1';
    echo $currentSequence . PHP_EOL;

    for ($i = 0; $i < $n; $i++) {
        $currentSequence = generateNextSequence($currentSequence);
        echo $currentSequence . PHP_EOL;
    }
}

?>