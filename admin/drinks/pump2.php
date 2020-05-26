<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
exec("gpio mode 1 out"); // GPIO 1 - Relay 2 
exec("gpio write 1 1");
sleep (2);
exec("gpio write 1 0");


header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
