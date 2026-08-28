<!DOCTYPE html>
<html>
<head>
    <title>Practice 14</title>
</head>
<body>
    <?php
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