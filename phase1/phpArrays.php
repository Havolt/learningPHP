<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Arrays</title>
</head>
<body>

    <?php

        //indexed arrays
        $games = array('Devil May Cry', 'Bayonetta', 'Ninja Gaiden', 'Wonderful 101', 'Metal Gear Rising', 'Onimusha');
        echo count($games) . "<br>";
        for($i = 0; $i < count($games); $i++ ){
            if($i == 0){
                echo "I like " . $games[$i] ; 
            }else if($i == count($games) - 1){
                echo " and " . $games[$i] . '.';
            }
            else{
                echo ', ' . $games[$i]; 
            }
        }

        echo "<br>";

        //associative arrays
        $age = array("Peter"=>"10", "Eamon"=>"8", "DSP"=>"2");
        echo "Peter is " . $age['Peter'] . " years old <br>";

        foreach($age as $x => $x_val){
            echo "Key = " . $x . ", Age = " . $x_val;
            echo "<br>";
        }
    ?>

    <div id="app"></div>

    
</body>
</html>