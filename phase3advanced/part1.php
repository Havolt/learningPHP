<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Part One</title>
</head>
<body>

    <?php
    
    //multidimensional arrays
    $games = array
    (
        array("1080 Snowboarding", 6, 3),
        array("Ocarina of Time", 2, 1),
        array("Goemon", 9, 4),
        array("Mario Kart", 14, 8)
    );
    foreach($games as $gameData){
        echo $gameData[0] . ": There are " . $gameData[1] . " copies in stock. " . $gameData[2] . " of these games are currently rented out.<br>";
    }
    echo "<br><br>";
    //date system
    $myDate = date("d/m/y");
    $madeTime = mktime(6, 30, 15, 10, 5, 1990);
    echo $myDate;
    echo "<br><br>";
    echo "&copy; 2010 - " . date("Y");
    echo "<br><br>";
    date_default_timezone_set("Europe/London");
    echo "The time is " . date('h:i:sa');
    echo "<br><br>";
    echo "My birthday was on " . date("d-m-Y h:i:sa",$madeTime);
    echo "<br><br>";

    //reading files
    //echo readfile("ranText.txt");

    $myfile = fopen("ranText.txt", "r") or die("Unable to open file");
    echo fread($myfile, filesize("ranText.txt"));
    fclose($myfile);

    $newfile = fopen("myText.txt", "w") or die("Unable to open file!");
    $txt = "Nero\n";
    fwrite($newfile, $txt);
    $txt = "Dante\n";
    fwrite($newfile, $txt);
    $txt = "Vergil\n";
    fwrite($newfile, $txt);
    fclose($newfile);

    
    ?>

    <div>
        <h1>Welcome to the home page!</h1>
        <p>Some random text here</p>
        <p>And a dash of other random text here</p>
        <?php include 'testReq.php' ?>
    </div>
    
</body>
</html>