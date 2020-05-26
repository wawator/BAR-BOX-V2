<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
exec("gpio mode 0 out"); // GPIO 0 - Relay 1 : Vodka 
exec("gpio write 0 1");
sleep (2);
exec("gpio write 0 0");


header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
