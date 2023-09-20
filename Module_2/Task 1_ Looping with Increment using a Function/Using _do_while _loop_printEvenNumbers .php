<?php
function printEvenNumbersWithDoWhileLoop(int $start, int $end, int $step) {
    $start+=1;
    $i = $start;

        do {
            echo $i . "<br>";
            $i += $step;
        } while ($i <= $end);
    }

    printEvenNumbersWithDoWhileLoop(1, 20, 2);

?>