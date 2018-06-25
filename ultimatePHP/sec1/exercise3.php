<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 3</title>
</head>
<body>


    <?php
        $username = "kirk";
        $password = "primedirective";
        $inputUsername = "kirk";
        $inputPassword = "primedirective";
        $correct = "Live Long and Prosper";
        $incorrect = "Please try again";

        if(($username == $inputUsername) && ($password == $inputPassword)){
            echo $correct;
        }else{
            echo $incorrect;
        }

        
    ?>


    
    <script>
    


</body>
</html>