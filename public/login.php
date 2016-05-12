<?php

require_once '../Auth.php';
require_once '../Input.php';

 session_start();

 if (Auth::check())    {

    header('location: authorized.php');
    die();

 }

 $error = "please log in";

$username =  input::get('username');
$password =  input::get('password');

if (!empty($_POST))   {
    if (Auth::attempt($username, $password))    {

        $username = Auth::user(); 

        header('location: authorized.php');
         die();

    }
    else    {

        $error = "The user name and password are incorrect";

    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
</head>
<body>
<?php echo $error ?>
    <form method="POST" action="login.php">
        <label>User Name</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="submit">
    </form>
</body>
</html>