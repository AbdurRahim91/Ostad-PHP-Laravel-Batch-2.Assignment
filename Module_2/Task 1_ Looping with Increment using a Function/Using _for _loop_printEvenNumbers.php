<?php
function printEvenNumbersWithForLoop(int $start, int $end, int $step) {
    $start+=1;
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i .'<br>';
    }
}
printEvenNumbersWithForLoop(1, 20, 2);
?>