<?php
    // There are multiple ways to print the values stored inside variables some of these are:
    $fruit = 'Apple';

    echo "$fruit" . "<br/>";
    echo '$fruit' . "<br/>";
    echo $fruit . "<br/>";
    print "$fruit" . "<br/>";
    print $fruit . "<br/>";
    print_r($fruit);
    echo "<br/>";
    var_dump($fruit);
    echo "<br/><br/><br/>";


    // Concatenating two strings
    $string1 = "Mr. John";
    $string2 = "Smith";

    echo $string1 . " " . $string2 . "<br/>";
    echo "$string1 $string2<br/>";
    echo $string1, " ", $string2, "<br/>";

    print $string1 . " " . $string2 . "<br/>";
    print "$string1 $string2<br/>";
    // print $string1, " ", $string2;       // Does not work
    echo "{$string1}son $string2 is a very good person<br/><br/><br/>";


    // Printing all values of arrays
    $colors = ['Red', 'Green', 'Blue'];
    print $colors . "<br/>";            // Array [Warning: Array to String conversion]
    echo $colors . "<br/><br/>";        // Array [Warning: Array to String conversion]

    print_r($colors);
    echo "<br/>";
    var_dump($colors);
    echo "<br/>";
?>