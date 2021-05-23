<?php
    // This way is writing functions brings flexibility to the end user
    function title($num1, $num2) {
        echo "<h2>Performing multiplication of $num1 * $num2</h2>";
    }

    function calculate($num1, $num2) {
        $result = $num1 * $num2;
        echo "<h2>$num1 * $num2 = $result</h2>";
    }

    function init($num1, $num2) {
        // Calling other functions from a function
        title($num1, $num2);
        calculate($num1, $num2);
    }

    // Calling the actual function
    $number1 = 15;
    $number2 = 27;
    init(15, 27);
?>