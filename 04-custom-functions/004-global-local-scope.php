<?php
    // Scope means the environment/context in which a specific element is available
    // PHP has two scope for variables - local and global
    // Global variables are accessible outside the functions as well as inside the functions
    // Local variables  are accessible only inside the functions
    $var = 'global';

    function convert1() {
        $var = 'local';
        echo "Scope of var from convert1() - $var<br/>";
    }

    echo "Scope of var - $var<br/>";
    convert1();
    echo "Scope of var - $var<br/><br/>";

    // ----------------------------------------------------------

    $variable = 'global';

    function convert2() {
        // Accessing the global variable from inside of a function (local scope)
        global $variable;

        // Changing the value of global variable
        $variable = 'local';
        echo "Scope of variable from convert2() - $variable<br/>";
    }

    echo "Scope of variable - $variable<br/>";
    convert2();
    echo "Scope of variable - $variable<br/>";
?>