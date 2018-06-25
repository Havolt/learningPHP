<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise Four</title>
</head>
<body>

    <?php
    
    for($i = 10; $i > -1; $i--){
        echo $i . "<br>";
    }
    echo "<br>";
    $counter = 0;
    while($counter < 20){
        echo ($counter * $counter) . "<br>";
        $counter++;
    }
    ?>


    
</body>
</html>