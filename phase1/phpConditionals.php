<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Operators</title>
</head>
<body>

    <?php 
        date_default_timezone_set('Europe/London');
        $t = date("H:i:s");

        echo $t . "<br>";

        if($t < 10){
            echo "Have a good morning";
        }else if($t < 20){
            echo "Have a good day";
        }else{
            echo "Have a good night";
        }

        echo "<br>";

        // Switch Statements //

        $favBethesda = 'Fallout 4';

        switch($favBethesda){
            case 'Morrowind':
                echo "You think everyone else is a casual";
                break;
            case 'Oblivion':
                echo "This was your first Bethesda Game";
                break;
            case 'Skyrim':
                echo "You like modding your games more than playing them";
                break;
            case 'Fallout 3':
                echo "Green is great";
                break;
            case 'Fallout: New Vegas':
                echo "Immersion is key";
                break;
            case 'Fallout 4':
                echo "You value gameplay";
                break;
            default:
                echo "You need to play a bethesda game";
        }



    ?>

    <div id="app"></div>

    
</body>
</html>