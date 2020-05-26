<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
exec("gpio mode 6 out"); // GPIO 6 - Relay 7 : Vodka 
exec("gpio write 6 1");
sleep (2);
exec("gpio write 6 0");


header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
