<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Sorting Arrays</title>
</head>
<body>

    <?php 
        //sort 
        $dogs = array('labrador', 'welsh corgi', 'dalmation', 'german sheperd');
        sort($dogs);
        foreach($dogs as $dogVal){
            echo $dogVal . "<br>";
        }
        //sort nums
        $nums = array(2,7,14,1,200,5,4,9,900,120);
        sort($nums);
        foreach($nums as $numVal){
            echo $numVal . "<br>";
        }
        //sort by key
        $age = array('Fred'=>'42', 'Wilma'=> '32', 'Barney'=>'38');
        ksort($age);
        foreach($age as $ageKey => $ageVal){
            echo $ageKey . " is " . $ageVal . " years old.<br>";
        }
        echo "<br>";
        //reverse key sort
        krsort($age);
        foreach($age as $ageKey => $ageVal){
            echo $ageKey . " is " . $ageVal . " years old.<br>";
        }
        echo "<br>";
        //sort by val
        sort($age);
            foreach($age as $ageNum => $ageVal){
                echo $ageVal . "<br>";
            }
            echo "<br>";
        //reverse sort by val
        rsort($age);
            foreach($age as $ageNum => $ageVal){
                echo $ageVal . "<br>";
            }
            echo "<br>";
    ?>
    
</body>
</html>