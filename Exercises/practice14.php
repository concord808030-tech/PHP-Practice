<!DOCTYPE html>
<html>
<head>
    <title>Practice 14</title>
</head>
<body>
    <?php
    // Normally, when a function finishes executing, all of its variables are deleted. 
    // However, sometimes we want a local variable NOT to be deleted. We need it for a further job. To achieve this, use the 
    // static keyword when you first declare the variable.
    // Then, each time the function is called, that variable will have the value from the 
    //last time the function was called.
    function myTest() {
        static $x = 0;
        echo $x;
        $x++;
    }
    myTest();
    echo "<br>";
    myTest();
    echo "<br>";
    myTest();
    ?>

</body>
</html>