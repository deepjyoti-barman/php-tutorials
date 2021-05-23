<?php
    // Declaring arrays (1st way)
    $number_list = array(10, 20, 30, 40);

    // Declaring arrays (2nd way)
    $mixed_list = ['Mango', 4, '<h1>Banana</h1>', 1.2];

    // Accessing elements of the array
    // echo $mixed_list;       // Output: Array [Warning: Array to string conversion]
    echo "<br/>" . $mixed_list[0];
    echo $mixed_list[2];
    // echo $mixed_list[4];    // Warning: Undefined array key 4

    // Printing the structure of an array
    print_r($number_list);
?>