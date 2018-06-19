<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First PHP</title>
</head>
<body>

    <?php
        $myVar = 'Elder Scrolls';
        $favES = 'Oblivion';
        $num1 = 4;
        $num2 = 3;
        $num3 = 0;
        $num4 = 10;
        $num5 = 5;
        $num6 = 0;

        function testFunc(){
            $funcVar = 'Fallout';
            global $myVar, $num1, $num2, $num3;
            $num3 = $num1 * $num2;
            echo "<p>Variable myVar inside function is: $myVar when called with global</p>";
            echo "<p>funcVar inside function is $funcVar</p>";
        }
        testFunc();

        function globalsTest(){
            $GLOBALS['num6'] = $GLOBALS['num4'] * $GLOBALS['num5'];
        }
        globalsTest();

        echo "<p>Variable myVar outside function is: $myVar</p>";
        echo "<p>funcVar outside function is \$funcVar</p>";
        echo "<p>Num3 ends up being $num3</p>";
        echo "<p>Num six using GLOBALS array changed a 0 to a $num6</p>";

        function staticTest(){
            static $x = 0;
            echo "<p>x is: " . $x . "</p>";
            $x++;

            $y = 0;
            echo "<p>y is: " . $y . "</p>";
            $y++;
        }
        staticTest();
        staticTest();
        staticTest();
    ?>



    <div id="app">
        
    <h1>
        <?php echo $myVar . ' is a great series! ' . $favES . ' is the best one.'; ?>
    </h1>

    <h2>
        <?php echo $num1 + $num2; ?>
    </h2>
        
    </div>
    
</body>
</html>