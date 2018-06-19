<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Functions</title>
</head>
<body>

    <?php 
    
    function wrtMsg(){
        echo 'Hello World!<br>';
    }
    wrtMsg();

    echo "<br>";

    function familyName($fname, $year){
        echo "$fname Waluigi was born in $year <br> ";
    }

    familyName('Luigi', 1988);
    familyName('Mario', 1984);
    familyName('Yoshi', 1990);
    familyName('Wario', 1992);

    echo "<br>";
    //Using default argument
    function setFilm($filmName = 'Titanic'){
        echo "My favourite film is $filmName <br>";
    }
    setFilm('Goodfellas');
    setFilm('Who framed roger rabbit');
    setFilm();
    setFilm('Pulp Fiction');

    echo "<br>";

    function sum($x1, $x2){
        $z = $x1 + $x2;
        return $z;
    }

    echo "8 + 10 = " . sum(8, 10) . "<br>";
    echo "100 + 1 = " . sum(100, 1) . "<br>";
    echo "29 + 87 = " . sum(29, 87) . "<br>"; 
    
    ?>

    <div id="app"></div>
    
</body>
</html>