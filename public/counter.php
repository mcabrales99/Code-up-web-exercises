<?php

function pageController()   {


$count = !isset($_GET['count']) ? 0 : $_GET['count'];
return ['count' => $count];


}extract(pageController());


?>
<!DOCTYPE html>
<html>
<head>
    <title>counter</title>
</head>
<body>

<p><?= $count ?></p>

<h1><a href="?count=<?= $count +1 ?>">UP</a></h1>
<h1><a href="?count=<?= $count -1 ?>">Down</a></h1>
</body>
</html>