<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning Constants</title>
</head>
<body>

    <?php
    
        define('lSl', '<br>');
        define("GREETING", "Hello Citizen");
        echo GREETING;
        echo lSl;
        define("esCity", 'Imperial City', true);
        echo esCiTY;

        define("myConstant", "Stay away from the summoner");
        echo lSl;

        function myFunc(){
            echo myConstant;
        }
        myFunc();

    ?>


    <div id="app"></div>
    
</body>
</html>