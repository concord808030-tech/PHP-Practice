<!DOCTYPE html>
<html>
<head>
    <title>Practice 15</title>
</head>
<body>
<?php
// he global keyword is used to access a global variable from within a function.
// To do this, use the global keyword before the variables (inside the function):
    $x = 5;
    $y = 10;
    function myTest() {
        global $x, $y;
        $y = $x + $y + $x + $x;

    }
    myTest();
    echo $y;
?>
</body>
</html>