<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beginner</title>
</head>
<body>

    <?php
    
    //creating a constant. First word is var name, second is value and an optional third argument takes true to make word case insensitive
    define('HELLO', 'Hello World');

    //arrays can be created similar to javascript
    $games = ['pokemon', 'elder scrolls', 'sonic'];
    //you can push to array by using empty square brackets
    $games[] = 'mario';
   
    //shows what is in entire array
    print_r($games);
    echo "<br><br>";
    //show data of array
    var_dump($games);
    echo "<br><br>";

    //associative array
    $people = array('Nero' => 32, "Dante" => 48, "Vergil" => 44);
    echo $people['Nero'];
    echo "<br><br>";

    $ids = array(11 => "Nero", 22 => "Dante", 36 => "Vergil");
    echo $ids[22];
    echo "<br><br>";

    $people['Fred'] = 51;
    //print_r($people);
    var_dump($people);
    echo "<br><br>";

    //Multi Dimensional Array

    $cars = array(
        array('Honda', 20, 10),
        array('Toyota', 50, 22),
        array('Ford', 85, 60)
    );

    echo $cars[1][2];

    ?>
    
</body>
</html>