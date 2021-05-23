<?php
    // Constants are containers like variables but their content once set does not change
    // Defining normal constant variable with define() function
    define('PI', 3.142857);
    echo "Value of PI = ", PI, "<br/>";

    // Defining array constant variables with define() function
    define('COLORS', array('Red', 'Green', 'Blue'));
    print_r(COLORS);
    echo "<br/><br/>";

    
    // Defining normal constant variable with const keyword
    const ROOT_TWO = 1.41421;
    echo "Value of ROOT_TWO = ", ROOT_TWO, "<br/>";

    // Defining array constant variables with const keyword
    const ANIMALS =  ['Cat', 'Dog', 'Cow'];
    print_r(ANIMALS);
    echo "<br/>";
?>