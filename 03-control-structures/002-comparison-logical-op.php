<?php
    // Comparison operators are the following:
    // equal ==
    // identical ===
    // compare > < >= <= <>
    // not equal !=
    // not identical !==
    if (3 == '3')
        echo "3 == '3' is true<br/>";

    if (3 === '3')
        echo "3 === '3' is true<br/>";
    else
        echo "3 === '3' is false<br/>";

    // Logical operators are the following:
    // and &&
    // or ||
    // not !
    if (4 == 5 || 5 < 10)
        echo "Either of 4 == 5 or 5 < 10 is true";
?>