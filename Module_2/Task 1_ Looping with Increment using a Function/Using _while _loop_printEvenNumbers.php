<?php
function printEvenNumbersWithWhileLoop(int $start, int $end, int $step) {
    $start+=1;
    $i = $start;
    while ($i <= $end) {
        echo $i . "<br>";
        $i += $step;
    }
}
printEvenNumbersWithWhileLoop(1, 20, 2);
?>