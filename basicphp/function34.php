<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <title>Main Website</title>
</head>
<body>

    <?php 
        function printMe($param = NULL) {
            print $param;
        }

        printMe("This is test");
        printMe();
    ?>
</body>
</html>