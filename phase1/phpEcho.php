<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Echo learning</title>
</head>
<body>
    
    <?php

            
        $txt1 = "Learn programming they said.";
        $txt2 = " be easy ";
        $x1 = 9;
        $x2 = 1;

        echo "<h2>PHP is fun but JavaScript it life</h2>";
        echo "Hello Tamriel<br>";
        echo "I'm learning PHP!<br>";
        echo "This ", "string ", "has ", "multiple ", "parameters", ", " , "cool?<br>";


        echo "<h2>" . $txt1 . "</h2>";
        echo "It will " . $txt2 . "they said.<br>"; 
        echo $x1 + $x2;

        print "<h2> Using the print command for this line</h2>";
        print "Fragment sentence " . "made using concatenation and print<br>"; 
        print "Printing multiplication of 5 and 6: " . 5 * 6 . ".<br>"; 

        print "<h3> $txt1 </h3>";
        print "Another concat " . $txt2 . "is here. <br>"; 
        print $x1 * $x2;
    ?>

    <div id="app"></div>



</body>
</html>