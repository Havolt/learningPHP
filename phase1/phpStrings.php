<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Strings</title>
</head>
<body>

    <?php 
        //outputs length of string
        echo strlen("Elder Scrolls: Skyrim");
        echo "<br>";
        //outputs amount of words
        echo str_word_count("Elder Scrolls: Oblivion");
        echo "<br>";
        //Reverse string
        echo strrev("eldeR crollS: morrowinD");
        echo "<br>";
        //Find specific text in string
        echo strpos('Red Green Blue Orange Yellow Pink Purple Black White', 'Blue');
        echo "<br>";
        //replace word in string
        echo str_replace("Elvis", "Miyamoto", "Elvis has left the building");
        echo "<br>";
    ?>

    <div id="app"></div>
    
</body>
</html>