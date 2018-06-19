<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Types</title>
</head>
<body>

    <?php 
    
        //int
        $x = 4510;
        var_dump($x);
        echo "<br>";
        //float
        $y = 10.50;
        var_dump($y);
        echo "<br>";
        //boolean
        $z = true;
        var_dump($z);
        echo "<br>";
        //array
        $games = array("Fallout", "Elder Scrols", "Starlight");
        var_dump($games);
        echo "<br>";
        //object
        class Game {
            function __construct() {
                $this->genre = "Platformer";
            }
            function gameMaker(){
                self::__construct();
            }
        }
        // create object
        $mario = new Game();
        // show object properties
        echo $mario->genre;
        echo "<br>";
        var_dump($mario);
        echo "<br>";
        //null
        $nu = 'Test World';
        $nu = null;
        var_dump($x);
    ?>


    <div id="app"></div>

    
</body>
</html>