<?php  

function pageController()   {

    $favoriteThings = ["Off-Roading", "Motorcycle Travel", "Kayaking", "Fishing", "Movies"];

    return ['favoriteThings' => $favoriteThings];

}
extract(pageController());

?>
<!DOCTYPE html>
<html>
<head>
    <title>My Favorite Things</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>

<style>
.divList    {

margin-left: 400px;
padding-top: 70px;
margin-right: 400px;

}
body    {

    background-color: #ECCCFF;

}
</style>

<body>

<div class="divList">

<h1>My favorite things are </h1>

<table class = "table table-striped">
    <?php foreach ($favoriteThings as $value) : ?>
   <tr><td><h2><?= $value;?></h2></td></tr>
        <?php endforeach; ?>

</table>
</div>


</body>
</html>