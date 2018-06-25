<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 5</title>
</head>
<body>

    <?php
    
        $username = "sconnor";
        $password = "fatethatwemake";
        $userFound = false;

        $userInfo = array("zsmith" => "loldunno", "jc" => "bionicman", "jenson" => "ididntaskforthis", "sconnor" => "fatethatwemake");

        foreach($userInfo as $userKey => $userVal){
            if($username == $userKey){
                $userFound = true;
                if($password == $userVal){
                    echo "Welcome";
                }else{
                    echo "Try Again";
                }
            }
        }
    
        if(!$userFound){
            echo "Try Again";
        }

    ?>

    
</body>
</html>