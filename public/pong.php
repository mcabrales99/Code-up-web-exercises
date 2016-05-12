<?php

//reference ping for functionality
require_once '../Input.php';

function pageController()   {

$count = !input::has('count') ? 0 : input::get('count');
return ['count' => $count];
}
extract(pageController());


?>
<!DOCTYPE html>
<html>
<head>
    <title>PONG</title>
</head>
<style>
    body    {
        background-color: red;
      
    }
    img     {
        margin-left: 400px;
        margin-top: 0px;
    }
    h1      {
        margin-left: 500px;
    
    }
    #score  {
        color: white;
    }

</style>

<body>
<h1 id="score"><p><?= $count ?></p></h1>
<h1>pong</h1>
<h1 id="hit"><a href="ping.php?count=<?= $count +1 ?>">HIT</a></h1>
<h1 id="miss"><a href="ping.php?count=0">MISS</a></h1>
<img src="img/pingpong.jpg" alt="Pong" width="400" height="300">


</body>
</html>