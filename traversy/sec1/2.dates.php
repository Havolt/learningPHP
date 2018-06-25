<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date and Time</title>
</head>
<body>

    <?php
    
        echo date('d'); // date
        echo "<br>";
        echo date('m'); // month
        echo "<br>";
        echo date('Y'); // year
        echo "<br>";
        echo date('l'); //day of week
        echo "<br><br>";

        echo date('d-m-Y');

        echo "<br><br>";

        echo date('h'); // hour
        echo "<br>";
        echo date('i'); //minutes
        echo "<br>";
        echo date('s'); //seconds
        echo "<br>";
        echo date('a'); // AM or PM
        echo "<br><br>";

        // Set Time Zone
        date_default_timezone_set('Europe/London');

        echo date('h:i:sa');
        echo "<br><br>";

        $myBirthday = mktime(18, 15, 30, 10, 5, 1990);


        echo date('d/m/Y h:i:sa', $myBirthday);
        echo "<br><br>";

        $anotherDate = strtotime('7:00PM April 17 1993');
        $anotherDate2 = strtotime('tomorrow');
        $anotherDate3 = strtotime('next friday');

        echo date('d/m/Y h:i:sa', $anotherDate3);
    
    ?>
    
</body>
</html>