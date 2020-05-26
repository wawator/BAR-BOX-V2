<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
exec("gpio mode 2 out"); // GPIO 2 - Relay 3 : Vodka 
exec("gpio write 2 1");
sleep (2);
exec("gpio write 2 0");


header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
