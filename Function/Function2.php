<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Score</title>
</head>
<body>
    <?php 
    function totalScore($score1,$score2 ,$score3 , $score4){
        $score1 = 10;
        $score2 = 20;
        $score3 =40;
        $score4= 100;
        
        $total = $score1+$score2 + $score3 + $score4;
        return $total;
    }

    echo "Total : " .totalScore(10,20,40,100);
    ?>
</body>
</html>