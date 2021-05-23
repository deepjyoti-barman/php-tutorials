<?php
    // for-each loops works only with arrays
    // It is made to go through every value of the array and perform some operation on them
    $numbers_list = array(10, 20, 30, 40, 50);

    $sum = 0;
    foreach ($numbers_list as $number) {
        echo $number . "<br/>";
        $sum = $sum + $number;
    }

    echo "Summation of all the numbers: $sum";
?>