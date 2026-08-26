<!DOCTYPE html>
<html>
    <body>
        <?php
        $x=5; // global scope
        // We add $x to the function so it can receive the variable's value.
        function myTest(int$x) { //works because $x is passed as a parameter
            // using x inside this function will not work
            echo "Variable x inside function is: $x ";
            echo "<br>";
            // A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:

        }
        myTest($x);
        // $x is passed into the function as a parameter.
        echo "Variable x outside function is: $x ";
        ?>

    </body>
</html>