<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Number</title>
</head>
<body>
    <?php
function checkEvenOdd($n) {
    return $n % 2 == 0 ? "$n is Even" : "$n is Odd";
}

echo "Number : " .checkEvenOdd(4);
?>


</body>
</html>