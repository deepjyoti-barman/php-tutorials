<?php
    function sum($num1, $num2) {
        return $num1 * $num2;
    }

    $result = sum(10, 3);
    echo "$result * 5 = ", sum($result, 5);
?>