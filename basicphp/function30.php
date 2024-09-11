<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <title>Main Website</title>
</head>
<body>
<?php
function addFive($num) {
    $num += 5;
}
function addSix($num) {
    $num += 6;
}
$orignum =10;
addFive($orignum);
echo "original value is $orignum";
echo "<br>";
addSix($orignum);
echo "original value is $originum";


?>
</body>
</html>