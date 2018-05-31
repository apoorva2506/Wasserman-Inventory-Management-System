<?php
session_start();
if(session_destroy())
{
header("Location: first.html");

}

// session_destroy();
// header("Location: first.html");
?>
