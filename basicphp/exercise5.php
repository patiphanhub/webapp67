<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <title>Main Website</title>
</head>
<body>

<?php
// Define a function named "test" that takes a parameter $n
function test($n) 
{
    // Use the modulo operator to check if $n is divisible by 3 or 7
    return $n % 3 == 0 || $n % 7 == 0;
}

// Call the test function with argument 3 and var_dump the result
var_dump(test(3));

// Call the test function with argument 14 and var_dump the result
var_dump(test(14));

// Call the test function with argument 12 and var_dump the result
var_dump(test(12));

// Call the test function with argument 37 and var_dump the result
var_dump(test(37));
?>


</body>
</html>
