<?php 
    
    $loggedIn = true;
    $arr = [1,2,3,4,5,6,7];
    /*
    echo ($loggedIn) ? "You are logged in" : "You are NOT logged in";

    $isRegistered = ($loggedIn) ?  true : false;

    echo $isRegistered;

    $age = 20;
    $score = 15;

    echo "Your score is : " . ($score > 10 ? ($age > 10 ? "Average" : "Exceptional") : ($age > 10 ? "Horrible" : "Average"));

    */

?>

<div>
    <?php if($loggedIn){ ?>
        <h1>Welcome User</h1>
    <?php }else{ ?>
        <h1>Welcome Guest</h1>
    <?php } ?>
</div>

<div>
    <?php if($loggedIn): ?>
        <h1>Welcome User</h1>
    <?php else: ?>
        <h1>Welcome Guest</h1>
    <?php endif; ?>
</div>

<div>
    <?php foreach($arr as $val): ?>
        <h1><?php echo $val ?></h1>
    <?php endforeach; ?>
</div>