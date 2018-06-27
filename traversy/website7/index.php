<?php

    $path = '/dir0/dir1/myfile.php';
    $file = 'file1.txt';

    /*
    // Return Filename
    echo basename($path);
    
    // Return Filename without exit
    echo basename($path, '.php');
    
    //Return the directory name from path
    echo dirname($path);

    //Check if file exists
    echo file_exists($file);

    //Get abs path
    echo realpath($file);

    //Checks to see if file (wont return if folder)
    echo is_file($file);

    //Check if writable
    echo is_writable($file);

    //Check if readable
    echo is_readable($file);

    //Get file size
    echo filesize($file);

    //Create a directory
    mkdir('testing');

    //Remove directory if empty
    rmdir('testing');

    //copy file 
    echo copy('file1.txt', 'file2.txt');

    //rename a file
    rename('file2.txt', 'myfile.txt');

    //Delete dile
    unlink('myfile.txt');

    //Write from file to string
    echo file_get_contents($file);

    //Write string to file
    echo file_put_contents($file, 'Goodbye World');

    $current = file_get_contents($file);

    $current .= " Goodbye World";

    file_put_contents($file, $current);

    //Open file for reading
    $handle  = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    echo $data;
    fclose($handle)
;    */

    //Open file for writing
    $handle = fopen('file2.txt', 'w');
    $txt = "Nero Donte\n";
    fwrite($handle, $txt);
    $txt = 'Steve Smith';
    fwrite($handle, $txt);
    fclose($handle);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File System</title>
</head>
<body>
    
</body>
</html>