<?php
    // An associative array is one which has elements with labels (i.e. elements are there in the form of key-value pair)
    // Normal Array
    $student_record = array(1, 'Deepjyoti', 'Barman', 'CSE');

    // Accessing values from a normal array
    echo $student_record[1] . ' ';
    
    // Associative Array
    $student_record_assoc = array('id' => 1, 'first_name' => 'Deepjyoti', 'last_name' => 'Barman', 'department' => 'CSE');

    // Accessing values from an associative array
    // echo $student_record2[2];       // Warning: Undefined array key 2
    echo $student_record_assoc['last_name'];
?>