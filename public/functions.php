<?php

session_start();

function clearSession()

    {
        session_unset();

        session_regenerate_id(true);
    }



function inputHas($key)     {

    return isset($_REQUEST[$key]);

}

function inputGet($key)     {

    return inputHas($key) ? $_REQUEST[$key] : null;

}
function escape($key)       {

    return htmlspecialchars($key);
    
}
