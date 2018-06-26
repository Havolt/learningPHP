<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String Functions</title>
</head>
<body>

    <?php
    
        #substr()
        // Returns a portion of the string
        /*
        $output = substr('Hello World', 1, 7);
        $output2 = substr('Hello Universe', -8);
        echo $output2;
        */

        #strlen()
        // Returns the length of a string
        /*
        $output3 = strlen('Mamma mia');
        echo $output3;
        */

        #strpos()
        // Finds the position of the first occurence of a string
        #strrpos()
        // Finds the position of the LAST occurence of a string
        /*
        $output4 = strpos('Hello World', 'W');
        echo $output4;
        $output5 = strrpos('Hello World', 'l');
        echo $output5;
        */

        #trim()
        // Strips whitespace
        /*
        $text = 'Hello       World     ';
        var_dump($text);

        $trimmer = trim($text);
        var_dump($trimmer);
        */

        #strtoupper()
        //Makes everything uppercase

        #strtolower()
        //Makes everything lowercase

        #ucwords()
        //Capitalize the first letter in each word
        /*
        $hgText = strtoupper('ohh nooo');
        echo $hgText;

        $lwText = strtolower('BE QUIET PLEASE');
        echo $lwText;

        $capText = ucwords('wake me up when september ends');
        echo $capText;
        */

        #str_replace()
        // Replace all occurences of a search string with a replacement
        /*
        $rpcText = 'Hello World';
        $replacer = str_replace('World', 'Baby', $rpcText);
        echo $replacer;
        */

        #is_string()
        //Check if string
        /*
        $str = 'Thank you very much';
        echo is_string($str);

        $values = [false, true, 22, '42', 'black', null, '', ' ', 0, '0', 22.5];

        foreach($values as $value){
            if(is_string($value)){
                echo "$value is a string <br>";
            }
        }
        */

        #gzcompress()
        // Compress a string

        $longStr = "This is a long string it contains many different meaningless words which i 
        care not for it may have spelling misktakes toobut i do not know nor care for this is
        purely for writing and reading purposes.";

        $compressed = gzcompress($longStr);
        echo $compressed;

        $original = gzuncompress($compressed);
        echo $original;


    ?>


    
</body>
</html>