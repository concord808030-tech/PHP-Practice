<!DOCTYPE html>
<html>
<body>
    <!-- A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function.
     Local variables are created when the function is called and are destroyed when the function finishes executing -->
    <?php
    function myTest() {
        $x=5; // local scope
        echo "Variable x inside function is: $x";
    }
    myTest();
    // using x outside the function will generate an error
    echo "Variable x outside function is: $x";
    ?>
<body>
</html>