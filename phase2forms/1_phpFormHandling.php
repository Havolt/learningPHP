<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Handling</title>
</head>
<body>
    



    <div>
        <form action="welcome.php" method="post">
            Name: <input type="text" name="name"><br>
            E-Mail: <input type="text" name="email"><br>
            <input type="submit">
        </form>
    </div>

    <div style="border: 1px solid black"></div><br>

    <div>
        <form action="welcome_get.php" method="get">
            Name: <input type="text" name="get_name"><br>
            E-Mail: <input type="text" name="get_email"><br>
            <input type="submit">
        </form>
    </div>


</body>
</html>