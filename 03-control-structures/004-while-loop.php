<?php
    /*
        - Loop allows us to repeat a block of code until a certain condition is met
        - Structure is given below:

        initializer
        while (condition) {
            ...
            ...
            increment_initializer
        }
    */
    $counter = 4;
    while ($counter <= 10) {
        echo $counter . "<br/>";
        // $counter = $counter + 1;
        $counter++;
    }
?>