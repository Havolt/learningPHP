<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise Six</title>
</head>
<body>

    <?php

        function validateUser($username, $password){
            static $userArr = array("zsmith" => "loppe", "rtam" => "bionicman", "q" => "continuum", "sconnor" => "fatethatwemake", "elvis" => "bluesuede");
            $foundName = false;

            foreach($userArr as $name => $pass){
                if($username == $name){
                    $foundName = true;
                    if($pass == $password){
                        return true;
                    }else{
                        return false;
                    }
                }
            }

            if(!$foundName){
                return false;
            }
        }

        
    
        if(validateUser("sconnor", "fatethatwemake")){
            echo "Welcome";
        }else{
            echo "Please Try Again";
        }
    
    
    ?>
    
</body>
</html>