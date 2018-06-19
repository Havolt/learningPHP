<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Loops</title>
</head>
<body>

    <?php 

    $x1 = 0;
    $x2 = 6;

        while($x1 < 5){
            echo "The number is: $x1 <br>";
            $x1++;
        }

        do{
            echo "The second number is: $x2 <br>";
            $x2++;
        }while($x2 < 5);

        echo "<br>";

        //for loops

        for($i = 1; $i <= 10; $i++){
            echo "I give this website a $i out of 10 <br>";
        }

        echo "<br>";

        //foreach loop
        $pokeGames = array('red/blue', 'gold/silver', 'ruby/sapphire', 'diamond/pearl', 'black/white', 'x/y', 'sun/moon');

        foreach($pokeGames as $value){
            echo "$value <br>";
        }

    ?>

    <div id="app"></div>
    
</body>
</html>