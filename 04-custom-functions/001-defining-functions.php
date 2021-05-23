<?php
    // Functions helps us organizing code into pieces of code (i.e. block of code) that perform a certain task and we can use that piece of code over and over again just by naming it and referring to it by its name
    function title() {
        echo "<h2>Performing multiplication of 17 * 7</h2>";
    }

    function calculate() {
        $result = 17 * 7;
        echo "<h2>17 * 7 = $result</h2>";
    }

    function init() {
        // Calling other functions from a function
        title();
        calculate();
    }

    // Calling the actual function
    init();
?>