<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
exec("gpio mode 7 out"); // GPIO 7 - Relay 8
exec("gpio write 7 1");
sleep (2);
exec("gpio write 7 0");


header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
