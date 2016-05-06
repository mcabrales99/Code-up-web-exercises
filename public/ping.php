<?php

require_once '../Input.php';
//this function is the controller that seets the variable count to zero or adds to the previous
//count
function pageController()   {

 $count = !input::has('count') ? 0 : input::get('count');
return ['count' => $count];

//The extract makes count a variable available to be used globally.  
}extract(pageController());

?>
<!DOCTYPE html>
<html>
<head>
    <title>PING</title>
</head>
<style>
    body    {
        background-color: blue;
    }
    img     {
        margin-left: 400px;
        margin-top: 0px;
    }
    h1      {
        margin-left: 500px;
    }
</style>
<body>
<!-- The variable $count is used to keep track of the score. At the intial part of the game it is set to 0 -->
 <h1><p><?= $count ?></p></h1>

<h1>ping</h1>

<!-- The first anchor tag is assigned value of the variable count=0 and is added 1 every time the user clicks on it sending the info and going to a second page. --> 
<h1><a href="pong.php?count=<?= $count +1 ?>">HIT</a></h1>
<!-- The second anchor tag is hard coded to always set the value to 0 and toggle the page to ping/pong.php -->
<h1><a href="pong.php?count=0">MISS</a></h1>

<img src="img/abc_pingpong_trailer_130529_wg.jpg" alt="Pong" width="400" height="300">

</body>
</html>