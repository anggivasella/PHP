<?php
session_start();
$name = "Alex";
$_SESSION['name'] = $name;
echo $_SESSION['name'];
?>
// Rearrange the code to declare the variable name, add it to the session, and then print it to the screen.