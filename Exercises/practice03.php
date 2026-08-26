<!DOCTYPE html>
<html>
<body>
    <!-- all variable names are case-sensitive!, look at the example below; only the first statement will display the value of the 
     $color variable! This is because $color and $COLOR are treated as two different variables: -->
<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $color . "<br>"; //Suppose to be COLOR...
?>
</body>
</html>