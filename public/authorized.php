<?php

require_once '../Auth.php';
require_once '../Input.php';
 session_start();

if (!(Auth::check()))    {

    header('location: login.php');
    die();

 }


?>
<!DOCTYPE html>
<html>
<head>
    <title>POST authorized</title>
</head>
<body>

<h1>Authorized</h1>

<a href="logout.php">LOG OUT HERE</a>
</body>
</html>
