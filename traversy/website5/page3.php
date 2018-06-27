<?php

    $user = ['name' => 'Nero', 'email' => 'dmc@gmail.com', 'age' => 32];

    $user = serialize($user);

    setcookie('user', $user, time() + (86400 * 30));

    $user = unserialize($_COOKIE['user']);

   print_r($user);

?>