<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <?php 
        function add($a, $b){
            return $a + $b;
        }

        function  subtract($a, $b){
            return $a - $b;
        }

        function  multiply($a, $b){
            return $a * $b;
        }

        function  devided($a, $b){
            return $b == 0 ? "Cannot divide by zero" : $a / $b;
        }

        echo "Add : " .add(2,8); 
        echo "subtract : " .subtract(5,2);
        echo "Multiply : " .multiply(9,4);
        echo "Devided : " .devided(9,3);
    ?>

    
</body>
</html>