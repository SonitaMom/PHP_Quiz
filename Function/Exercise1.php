<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function exercer1</title>
</head>
<body>
    <?php 

    function Student($name, $gender, $age, $major){
    return     "Name : $name, Gender : $gender, Age : $age, Major : $major";
    }

    echo "Student Info : " .Student("Mom Sonita", "Female", 20, "Computer Science");
    ?>
</body>
</html>